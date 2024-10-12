<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FileDownloadController;
use App\Http\Controllers\API\ScrabbleController;
use App\Http\Controllers\API\NewscastingController;
use App\Http\Controllers\API\SpeechController;
use App\Http\Controllers\API\DebateController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Endpoint Register dan Login
Route::post('SignUp', \App\Http\Controllers\API\SignUpController::class);
Route::post('login', \App\Http\Controllers\API\LoginController::class);

Route::post('/scrabble', [ScrabbleController::class, 'store'])->name('scrabble.store');
Route::post('/speech', [SpeechController::class, 'store'])->name('speech.store');
Route::post('/newscasting', [NewscastingController::class, 'store'])->name('newscasting.store');
Route::post('/debate', [DebateController::class, 'store'])->name('debate.store');
Route::get('/download/{folder}/{filename}', [FileDownloadController::class, 'download'])->name('download');