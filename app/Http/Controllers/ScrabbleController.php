<?php

namespace App\Http\Controllers;

use App\Models\Scrabble;
use Illuminate\Http\Request;

class ScrabbleController extends Controller
{
    public function index()
    {
        $scrabbles = Scrabble::all();
        return view('admin.data-scrabble', compact('scrabbles'));
    }

    public function show($id)
    {
        $scrabble = Scrabble::findOrFail($id);
        
        return view('admin.detail-scrabble', compact('scrabble'));
    }
}