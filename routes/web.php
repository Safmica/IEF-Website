<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DebateController;
use App\Http\Controllers\SpeechController;
use App\Http\Controllers\ScrabbleController;
use App\Http\Controllers\NewscastingController;
use App\Http\Controllers\ExportController;
use App\Models\Newscasting;
use App\Models\Speech;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [Controller::class, 'login']);
Route::get('/welcome', [Controller::class, 'welcome']);
Route::get('/competition', [Controller::class, 'competition']);
Route::get('/about', [Controller::class, 'about']);
Route::get('/faq', [Controller::class, 'faq']);
Route::get('/verification', [Controller::class, 'verification']);
Route::get('/scrabble-confirmation', [Controller::class, 'scrabbleConfirmation']);
Route::get('/debate-confirmation', [Controller::class, 'debateConfirmation']);
Route::get('/newscasting-confirmation', [Controller::class, 'newscastingConfirmation']);
Route::get('/speech-confirmation', [Controller::class, 'speechConfirmation']);

Route::group(['routeMiddleware' => 'check.login'], function () {
    Route::get('/register', [Controller::class, 'register']);
    Route::get('/register-scrabble', [Controller::class, 'registerScrabble']);
    Route::get('/register-newscasting', [Controller::class, 'registerNewscasting']);
    Route::get('/register-speech', [Controller::class, 'registerSpeech']);
    Route::get('/register-debate', [Controller::class, 'registerDebate']);
});

// Route Admin
Route::get('/admin/dashboard', [Controller::class, 'admindashboard']);
Route::get('/admin/export-data', [Controller::class, 'adminexport']);
Route::get('/admin/manage-account', [Controller::class, 'adminmanage']);
Route::get('/admin/data-speech', [Controller::class, 'dataspeech']);
Route::get('/admin/data-debate', [Controller::class, 'datadebate']);
Route::get('/admin/data-newscasting', [Controller::class, 'datanewscasting']);
Route::get('/admin/data-scrabble', [Controller::class, 'datascrabble']);

Route::get('/admin/data-debate', [DebateController::class, 'index']);
Route::get('/admin/data-speech', [SpeechController::class, 'index']);
Route::get('/admin/data-scrabble', [ScrabbleController::class, 'index']);
Route::get('/admin/data-newscasting', [NewscastingController::class, 'index']);

Route::get('/admin/export-debate', [DebateController::class, 'exportDebate']);
Route::get('/admin/export-speech', [SpeechController::class, 'exportSpeech']);
Route::get('/admin/export-scrabble', [ScrabbleController::class, 'exportScrabble']);
Route::get('/admin/export-newscasting', [NewscastingController::class, 'exportNewscasting']);

// detail data competition
Route::get('/debate/{id}', [DebateController::class, 'show'])->name('debate.show');
Route::get('/speech/{id}', [SpeechController::class, 'show'])->name('speech.show');
Route::get('/scrabble/{id}', [ScrabbleController::class, 'show'])->name('scrabble.show');
Route::get('/newscasting/{id}', [NewscastingController::class, 'show'])->name('newscasting.show');

// Confirm competition
// routes/web.php
Route::post('/admin/scrabble/confirm/{id}', [AdminController::class, 'confirmScrabble'])->name('scrabble.confirm');
