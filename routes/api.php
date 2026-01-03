<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiProductController;

Route::apiResource('products', ApiProductController::class);
