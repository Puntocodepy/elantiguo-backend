<?php

namespace App\Http\Requests;

use App\Constants\HttpRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;

class InventoryRequest extends FormRequest
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
            'product_id'  => 'required|integer',
            'machine_id'  => 'nullable|integer',
            'employee_id' => 'required|integer',
            'user_id'     => 'required|integer',
            'quantity'    => 'required|numeric',
            'comment'     => 'nullable|string',
        ];
    }


    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'message'   => HttpRequest::REQUEST_INVALID,
                'errors'    => $validator->errors()
            ], HttpRequest::UNPROCESSABLE_ENTITY)
        );

        Log::error('InventoryController::store: ', [HttpRequest::REQUEST_INVALID]);
    }
}
