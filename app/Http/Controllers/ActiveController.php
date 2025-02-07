<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActiveRequest;
use App\Models\Active;

class ActiveController extends Controller
{
    public function store(ActiveRequest $request)
    {
        $invoice = Active::create($request->validated());
        $invoice->detail()->createMany($request->input('detalleActivo'));
        return response()->json(['message' => 'Factura creada exitosamente!', 'invoice' => $invoice], 201);
    }

    public function update(ActiveRequest $request, Active $invoice)
    {
        $invoice->update($request->validated());
        return response()->json(['message' => 'Factura actualizada exitosamente!', 'invoice' => $invoice], 200);
    }
}
