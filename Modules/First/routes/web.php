<?php

use Illuminate\Support\Facades\Route;
use Modules\First\Http\Controllers\FirstController;

Route::get("/", [FirstController::class,"index"])->name("home");