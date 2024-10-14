<?php

namespace App\Http\Controllers;

use App\Models\Newscasting;
use Illuminate\Http\Request;

class NewscastingController extends Controller
{
    public function index()
    {
        $newscastings = Newscasting::all();
        return view('admin.data-newscasting', compact('newscastings'));
    }

    public function show($id)
    {
        $newscasting = Newscasting::findOrFail($id);
        
        return view('admin.detail-newscasting', compact('newscasting'));
    }
}