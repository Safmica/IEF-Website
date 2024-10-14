<?php

namespace App\Http\Controllers;

use App\Models\Speech;
use Illuminate\Http\Request;

class SpeechController extends Controller
{
    public function index()
    {
        $speeches = Speech::all();
        return view('admin.data-speech', compact('speeches'));
    }

    public function show($id)
    {
        $speech = Speech::findOrFail($id);
        
        return view('admin.detail-speech', compact('speech'));
    }
}
