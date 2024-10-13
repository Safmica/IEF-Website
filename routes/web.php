<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DebateController;

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
Route::get('/admin/data-scrable', [Controller::class, 'datascrable']);

Route::resource('admin', adminController::class);


Route::get('/admin/data-debate', [DebateController::class, 'index']);
Route::get('/download/registration_proof/{filename}', function ($filename) {
    if (Storage::disk('private')->exists("registration_proofs/{$filename}")) {
        // Mendapatkan ekstensi file
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        // Mengatur tipe konten sesuai ekstensi file
        $mimeType = '';
        switch (strtolower($extension)) {
            case 'jpg':
            case 'jpeg':
            case 'png':
            case 'gif':
                $mimeType = 'image/' . strtolower($extension);
                break;
            case 'pdf':
                $mimeType = 'application/pdf';
                break;
            default:
                $mimeType = 'application/octet-stream';
        }

        // Menampilkan file
        return response()->file(storage_path("app/private/registration_proofs/{$filename}"), [
            'Content-Type' => $mimeType,
        ]);
    } else {
        abort(404, 'File not found.');
    }
})->name('download.registration_proof');
