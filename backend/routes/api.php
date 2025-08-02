<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarcaController;

Route::apiResource('marcas',MarcaController::class); 

Route::post('/register',[AuthController::class,'register']);

Route::post('/login',[AuthController::class,'login']);