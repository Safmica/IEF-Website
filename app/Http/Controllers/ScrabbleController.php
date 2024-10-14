<?php

namespace App\Http\Controllers;

use App\Models\RegistScrabble;
use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    public function index()
    {
        $scrabbles = RegistScrabble::all();
        return view('admin.data-scrabble', compact('scrabbles'));
    }
}