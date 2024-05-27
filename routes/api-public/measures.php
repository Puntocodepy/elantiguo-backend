<?php

use App\Http\Controllers\MeasureController;
use Illuminate\Support\Facades\Route;

Route::prefix('measures')->group(function () {
    Route::get('/list', [MeasureController::class, 'getList']);
});
