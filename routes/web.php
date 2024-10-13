<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;

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

Route::resource('admin', adminController::class);