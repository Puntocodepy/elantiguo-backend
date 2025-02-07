<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActiveRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'descuento'      => ['required', 'numeric', 'min:0'],
            'nro_factura'    => ['required', 'string', 'regex:/^\d{3}-\d{3}-\d{7}$/'],
            'fecha'          => ['required', 'date', 'date_format:Y-m-d'],
            'detalleActivo'  => ['required', 'array', 'min:1'],
            'detalleActivo.*.cantidad' => ['required', 'integer', 'min:1'],
            'detalleActivo.*.producto' => ['required', 'string'],
            'detalleActivo.*.costo'    => ['required', 'numeric', 'min:0'],
            'detalleActivo.*.total'    => ['required', 'numeric', 'min:0'],
            'idcliente'      => ['required', 'integer', 'exists:cliente,idcliente'],
            'tipo_factura'   => ['required', 'string', 'in:contado,credito'],
            'estado'         => ['required', 'string', 'max:1'],
            'tipo_ingress'   => ['required', 'string', 'max:1'],
        ];
    }


}
