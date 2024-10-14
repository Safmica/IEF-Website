<?php

namespace App\Http\Controllers;

use App\Models\RegistNewscasting;
use Illuminate\Http\Request;

class NewscastingController extends Controller
{
    public function index()
    {
        $newscastings = RegistNewscasting::all();
        return view('admin.data-newscasting', compact('newscastings'));
    }
}