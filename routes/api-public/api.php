<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiolimpiezaController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Auth
Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

//Biolimpieza API
Route::prefix('biolimpieza')->group(function () {
    Route::post('/budget', [BiolimpiezaController::class, 'sendBudget']);
    Route::post('/plan', [BiolimpiezaController::class, 'sendPlan']);
    Route::post('/contact', [BiolimpiezaController::class, 'sendContact']);
    Route::post('/question', [BiolimpiezaController::class, 'sendQuestion']);
});
