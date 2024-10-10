<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Endpoint Register dan Login
Route::post('register', \App\Http\Controllers\API\RegisterController::class);
Route::post('login', \App\Http\Controllers\API\LoginController::class);
