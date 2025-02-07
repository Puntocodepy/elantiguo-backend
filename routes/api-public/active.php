<?php

use Illuminate\Support\Facades\Route;

Route::prefix('actives')->group(function () {
    Route::post('/store', [\App\Http\Controllers\ActiveController::class, 'store']);
});
