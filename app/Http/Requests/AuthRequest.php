<?php

namespace App\Http\Requests;

use App\Constants\HttpRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;


class AuthRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(
            response()->json([
                'message'   => HttpRequest::REQUEST_INVALID,
                'errors'    => $validator->errors()
            ], HttpRequest::UNPROCESSABLE_ENTITY)
        );

        Log::error('AuthController::register: ', [HttpRequest::REQUEST_INVALID]);
    }
}
