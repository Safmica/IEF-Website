<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FileDownloadController;
use App\Http\Controllers\API\ScrabbleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Endpoint Register dan Login
Route::post('SignUp', \App\Http\Controllers\API\SignUpController::class);
Route::post('login', \App\Http\Controllers\API\LoginController::class);

Route::post('/scrabble', [ScrabbleController::class, 'store']);
Route::get('/download/{folder}/{filename}', [FileDownloadController::class, 'download'])->name('download');