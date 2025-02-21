<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::prefix('expenses')->group(function () {
    Route::post('/search', [ExpenseController::class, 'search']);
    Route::delete('/delete/{id}', [ExpenseController::class, 'delete']);
    Route::put('/update/{id}', [ExpenseController::class, 'update']);
});
