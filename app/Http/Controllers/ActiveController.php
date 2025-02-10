<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActiveRequest;
use App\Models\Active;

class ActiveController extends Controller
{
    public function store(ActiveRequest $request)
    {
        try {
            $invoice = Active::create($request->validated());
            $invoice->detail()->createMany($request->input('detalleActivo'));
            return response()->json(['message' => 'Factura creada exitosamente!', 'invoice' => $invoice], 201);

        } catch (\Exception $ex) {
            $message = $ex->getCode() == 23000 ? "La factura $request->nro_factura ya existe" : "Error al cargar la factura";
            return response()->json(['message' => $message], 500);
        }
    }

    public function update(ActiveRequest $request, Active $invoice)
    {
        $invoice->update($request->validated());
        return response()->json(['message' => 'Factura actualizada exitosamente!', 'invoice' => $invoice], 200);
    }
}
