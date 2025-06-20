<?php

use Illuminate\Support\Facades\Route;
use Modules\First\Http\Controllers\FirstController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('firsts', FirstController::class)->names('first');
});
