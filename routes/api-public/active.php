<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActiveController;


Route::prefix('actives')->group(function () {
    Route::post('/store', [ActiveController::class, 'store']);
    Route::delete('/delete/{id}', [ActiveController::class, 'delete']);
});
