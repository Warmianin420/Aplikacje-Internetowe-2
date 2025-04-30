<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::apiResource('countries', CountryController::class);
Route::get('/countries', [App\Http\Controllers\API\CountryController::class, 'index']); 
/*
Route::middleware('api')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/login', [AuthController::class, 'login']);
});
*/
