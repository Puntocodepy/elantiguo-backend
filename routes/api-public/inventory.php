<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('inventory')->group(function () {
    Route::post('/search', [InventoryController::class, 'search']);
    Route::post('/store', [InventoryController::class, 'store']);
});
