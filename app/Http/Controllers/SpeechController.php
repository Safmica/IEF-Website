<?php

namespace App\Http\Controllers;

use App\Models\RegistSpeech;
use Illuminate\Http\Request;

class SpeechController extends Controller
{
    public function index()
    {
        $speeches = RegistSpeech::all();
        return view('admin.data-speech', compact('speeches'));
    }
}
