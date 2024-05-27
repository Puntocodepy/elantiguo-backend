<?php

namespace App\Http\Requests;

use App\Constants\HttpRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;

class ProductRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code'       => 'nullable|integer',
            'comment'    => 'nullable|string',
            'id'         => 'nullable|integer',
            'measure_id' => 'required|integer',
            'min_stock'  => 'nullable|integer',
            'name'       => 'required|string',
            'stock'      => 'required|integer',
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'message'   => HttpRequest::REQUEST_INVALID,
                'errors'    => $validator->errors()
            ], HttpRequest::UNPROCESSABLE_ENTITY)
        );

        Log::error('ProductController::updateOrCreate: ', [HttpRequest::REQUEST_INVALID]);
    }
}
