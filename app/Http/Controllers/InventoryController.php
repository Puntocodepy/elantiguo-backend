<?php

namespace App\Http\Controllers;

use App\Constants\HttpRequest;
use App\Http\Requests\InventoryRequest;
use App\Models\Inventory;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InventoryController extends Controller
{
    protected $invetory;
    protected $product;

    public function __construct(
        Inventory $invetory,
        Product $product
    ){
        $this->invetory = $invetory;
        $this->product = $product;
    }


    public function store(InventoryRequest $request){
        try{
            $this->product->decrementStock($request->product_id, $request->quantity);

            $this->invetory->create($request->all());

            $message = 'Salida registrada con éxito';
            $code    = HttpRequest::CODE_CREATED;

        }catch(Exception $ex){
            $message = $ex->getMessage();
            $code    = HttpRequest::UNPROCESSABLE_ENTITY;
            Log::error('InvetoryController::store: ', [$ex->getMessage()]);
        }

        return respJson($message, $code);
    }
}
