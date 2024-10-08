<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [Controller::class, 'login']);
Route::get('/welcome', [Controller::class, 'welcome']);

Route::resource('admin', adminController::class);
