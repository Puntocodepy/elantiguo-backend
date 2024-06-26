<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::prefix('expenses')->group(function () {
    Route::post('/search', [ExpenseController::class, 'search']);
});
