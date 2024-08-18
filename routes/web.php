<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CiudadController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ciudades', [CiudadController::class, 'index']);
