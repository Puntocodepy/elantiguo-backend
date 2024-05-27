<?php

namespace App\Http\Controllers;

use App\Constants\HttpRequest;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    /**
     * Register user and create token
     * @param Request $request
     * @return JsonResponse
     */
    public function register(AuthRequest $request) :JsonResponse{
        $user = new  User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $response = $this->getUserResponse($user, 'Usuario registrado correctamente!');

        return response()->json($response, HttpRequest::CODE_CREATED);
    }


    /**
     * Login user and create token
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request){
        try{
            $credentials = $request->only('email', 'password');

            if (!auth()->attempt($credentials)) {
                throw new Exception(HttpRequest::CREDENTIAL_INVALID);
            }

            $user = User::where('email', $request->email)->first();

            $response = $this->getUserResponse($user, 'Usuario logueado correctamente!');
            $code = HttpRequest::CODE_SUCCESSFUL;

        }catch(Exception $ex){
            $response = getMessage( $ex->getMessage() );
            $code     = HttpRequest::UNAUTHORIZED_CODE;
            Log::error('AuthController::login: ', [ $ex->getMessage(), $request->email ]);
        }

        return response()->json($response, $code);
    }


    public function getUserResponse($user, $message){
        return [
            'message' => $message,
            'user' => $user,
            'access_token' => $user->createToken('authToken')->accessToken
        ];
    }


}
