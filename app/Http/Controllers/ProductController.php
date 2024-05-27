<?php

namespace App\Http\Controllers;

use Exception;
use App\Constants\HttpRequest;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductProviderResource;
use App\Http\Resources\ProductResource;
use App\Models\Expense;
use App\Models\Product;
use App\Models\ProductProvider;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ProductController extends Controller
{
    protected $product;
    protected $productProvider;
    protected $expense;

    public function __construct(
        Expense $expense,
        Product $product,
        ProductProvider $productProvider
    ){
        $this->expense = $expense;
        $this->product = $product;
        $this->productProvider = $productProvider;
    }


    /**
     * Busqueda de productos para la tabla
     * @param Request $request
     * @return JsonResponse
     */
    public function search(Request $request){
        $products = $this->product
            ->with('measures')
            ->where('name', 'LIKE', "%{$request->name}%")
            ->paginate($request->per_page);

        return response()->json($products);
    }


    /**
     * Exporta los codigos qr de los productos seleccionados
     * @param Request $request
     * @return StreamedResponse
     */
    public function exporQrsPdf(Request $request) {
        try{
            $products = $this->product->whereIn('id', $request->ids)->get();

            $qrCodes = $this->getQrCodes($products);

            $pdf = FacadePdf::loadView('pdf.products-qr', ['products' => $qrCodes]);

            return $pdf->download('qr.pdf');

        }catch(Exception $ex){
            Log::error('ProductController::getQrByIds:', [$ex->getMessage()]);
            return respUnprocessableEntity($ex->getMessage());
        }
    }


    /**
     * Busca un producto por su codigo
     * @param integer $id
     * @return JsonResponse
     */
    public function getByCode($id) {
        try{
            $product = $this->product->where('code', $id)->firstOrFail();

            $response = new ProductResource($product);

            return response()->json($response, HttpRequest::CODE_SUCCESSFUL);

        }catch(Exception $ex){
            $message = $ex->getMessage();
            Log::error('ProductController::getByCode: ', [$message]);
            return respJson($message, HttpRequest::NOT_FOUND);
        }

    }


    /**
     * Guarda un nuevo producto o actualiza uno existente
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request) {
        try{

            $this->expense->store($request);

            foreach ($request->detallePasivo as $detail){
                $params = (object) $detail;

                # Inserta o actualiza en el stock
                $result = $this->product->firstOrNew([ 'name' => $params->producto ]);
                $result->measure_id = $params->measure_stock;
                $result->stock = $result->id
                    ? $result->stock + $params->cantidad_stock
                    : $params->cantidad_stock;
                $result->save();

                # Inserta o actualiza en el proveedor
                $query = ['product_id' => $result->id, 'provider_id' => $request->idproveedor];
                $provider = $this->productProvider->firstOrNew($query);
                $provider->measure_id = $params->measure_provider;
                $provider->price = $params->costo;
                $provider->tax = $params->tax;
                $provider->save();
            }

            $message = 'Producto creado con éxito';
            $code    = HttpRequest::CODE_CREATED;

        }catch(Exception $ex){
            $message = $ex->getMessage();
            $code    = HttpRequest::UNPROCESSABLE_ENTITY;
            Log::error('CustomerController::store: ', [$message]);
        }

        return respJson($message, $code);
    }


    /**
     * Actualizar datos de un producto
     * @param Request $request
     * @return JsonResponse
     */
    public function updateOrCreate(ProductRequest $request) {
        try{
            $product = $this->product->firstOrNew([ 'id' => $request->id ]);
            $product->fill($request->all());
            $product->save();

            $message = $request->id ? 'Actualizado' : 'Creado';
            $code    = HttpRequest::CODE_CREATED;

        }catch(Exception $ex){
            $message = $ex->getMessage();
            $code    = HttpRequest::UNPROCESSABLE_ENTITY;
            Log::error('CustomerController::upate: ', [$ex->getMessage()]);
        }

        return respJson($message, $code);
    }


    /**
     * Elimina un producto
     * @param number $id
     * @return JsonResponse
     */
    public function delete($id) {
        try{
            $data = $this->product->findOrFail($id);
            $data->delete();

            $message = 'Producto eliminado con éxito';
            $code    = HttpRequest::CODE_CREATED;

        }catch(Exception $ex){
            $message = $ex->getMessage();
            $code    = HttpRequest::UNPROCESSABLE_ENTITY;
            Log::error('CustomerController::delete: ', [$ex->getMessage()]);
        }

        return respJson($message, $code);
    }


    #Funciones privadas------------------------------------------------------------------------

    public function getQrCodes($products){
        $qrCodes = [];

        foreach($products as $product) {
            $array = [
                'qrCode' => QrCode::size(50)->generate($product->code),
                'name' => $product->name
            ];
            array_push($qrCodes, $array);
        }

        return $qrCodes;
    }





}
