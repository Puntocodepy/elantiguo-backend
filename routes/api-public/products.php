<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->group(function () {
    Route::get('/get-by-code/{id}', [ProductController::class, 'getByCode']);
    Route::post('/search', [ProductController::class, 'search']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::post('/get-qr-by-ids', [ProductController::class, 'exporQrsPdf']);
    Route::post('/update-or-create', [ProductController::class, 'updateOrCreate']);
    Route::delete('/delete/{id}', [ProductController::class, 'delete']);
});
