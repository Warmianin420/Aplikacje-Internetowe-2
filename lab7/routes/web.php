<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(TripController::class)->group(function () {
    Route::get('/trips', 'index')->name('trips.index');
    Route::get('/trips/{id}', 'show')->name('trips.show');
});
Route::resource('countries', CountryController::class);
Route::controller(CountryController::class)->group(function () {
    Route::get('/countries.create', 'create')->name('countries.create');
});
