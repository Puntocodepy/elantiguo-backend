<?php

use App\Http\Controllers\MachineController;
use Illuminate\Support\Facades\Route;

Route::prefix('machines')->group(function () {
    Route::get('/list', [MachineController::class, 'list']);
});
