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
Route::get('/register', [Controller::class, 'register']);

// Route Admin
Route::get('/admin/dashboard', [Controller::class, 'admindashboard']);
Route::get('/admin/export-data', [Controller::class, 'adminexport']);
Route::get('/admin/manage-account', [Controller::class, 'adminmanage']);

Route::resource('admin', adminController::class);
