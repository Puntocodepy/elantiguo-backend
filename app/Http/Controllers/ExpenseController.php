<?php

namespace App\Http\Controllers;

use App\Constants\HttpRequest;
use App\Models\Expense;
use App\Models\Product;
use App\Models\ProductProvider;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{

    protected $expense;

    public function __construct(Expense $expense)
    {
        $this->expense = $expense;
    }

    /**
     * Busqueda de egresos para la tabla
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request)
    {
        $expenses = $this->expense
            ->with('detail')
            ->orderBy('idpasivo', 'desc')
            ->paginate($request->per_page);

        return response()->json($expenses);
    }

    /**
     * Actualiza datos de una factura de egresos
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        $invoice = $this->expense->with('detail')->find($id);
        if(!$invoice) return response()->json(['message' => 'Factura no encontrada'], HttpRequest::NOT_FOUND);

        DB::transaction(function () use ($request, $invoice) {
            $invoice->update($request->all());

            # Resta del stock
            foreach ($invoice->detail as $detail) {
                $params = (object) $detail;
                $product = Product::where('name', $params->producto)->first();
                if(!$product) continue;

                $product->stock -= (float) $params->quantity_stock ?? $detail->cantidad;
                $product->save();
            }

            # Actualiza la factura de egreso
            $invoice->detail()->delete();
            $invoice->detail()->createMany($request->input('detallePasivo'));

            foreach ($request->input('detallePasivo') as $detail) {
                #Actualiza de nuevo el stock
                $detailInvoice     = (object) $detail;
                $stock             = Product::firstOrNew(['name' => $detailInvoice->producto]);
                $stock->measure_id = $detailInvoice->measure_stock_id ?? 1;
                $quantity          = $detailInvoice->quantity_stock ?? $detailInvoice->cantidad;
                $stock->stock      = $stock->id ? $stock->stock + $quantity : $quantity;
                $stock->deposit    = $detailInvoice->deposit;
                $stock->save();

                # Actualiza en el proveedor
                $inventory             = ProductProvider::firstOrNew(['product_id' => $stock->id, 'provider_id' => $request->idproveedor]);
                $inventory->measure_id = $detailInvoice->measure_id ?? 1;
                $inventory->price      = $detailInvoice->costo;
                $inventory->tax        = $detailInvoice->tax;
                $inventory->save();
            }
        });

        return response()->json(['message' => 'Factura actualizada exitosamente!'], HttpRequest::CODE_SUCCESSFUL);
    }

    public function delete($id)
    {
        try {
            $invoice = $this->expense->find($id);
            if (!$invoice) throw new Exception('Factura no encontrada');

            // Resta del stock
            foreach ($invoice->detail as $detail) {
                $product = Product::where('name', $detail->producto)->first();
                if(!$product) continue;

                $product->stock -= (float) $detail->quantity_stock ?? $detail->cantidad;
                $product->save();
            }


            // Elimina el detalle relacionado (si existe)
            if ($invoice->detail) $invoice->detail()->delete();

            $invoice->delete();
            return response()->json(['message' => 'Factura eliminada exitosamente!'], HttpRequest::CODE_SUCCESSFUL);

        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], HttpRequest::INTERNAL_SERVER_ERROR);
        }
    }
}
