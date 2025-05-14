<?php

use App\Http\Controllers\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\CountryResource;
use App\Http\Controllers\AuthController;

// ...

Route::post('auth/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->post('auth/me', [AuthController::class, 'me']);