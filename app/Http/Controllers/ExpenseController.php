<?php

namespace App\Http\Controllers;

use App\Constants\HttpRequest;
use App\Models\Expense;
use Exception;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    protected $expense;

    public function __construct(
        Expense $expense
    ){
        $this->expense = $expense;
    }

    /**
     * Busqueda de egresos para la tabla
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){
        $expenses = $this->expense
            ->with('detail')
            ->orderBy('idpasivo', 'desc')
            ->paginate($request->per_page);

        return response()->json($expenses);
    }

    public function delete($id)
    {
        try{
            $invoice = $this->expense->find($id);
            if(!$invoice) throw new Exception('Factura no encontrada');

            // Elimina el detalle relacionado (si existe)
            if ($invoice->detail)  $invoice->detail()->delete();

            $invoice->delete();
            return response()->json(['message' => 'Factura eliminada exitosamente!'], HttpRequest::CODE_SUCCESSFUL);

        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()], HttpRequest::INTERNAL_SERVER_ERROR);
        }
    }
}
