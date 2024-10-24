<?php

namespace App\Http\Controllers;

use App\Models\Debate;
use App\Models\Scrabble;
use App\Models\Speech;
use App\Models\Newscasting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $debates = Debate::all();
        $scrabbles = Scrabble::all();
        $speeches = Speech::all();
        $newscastings = Newscasting::all();

        return view('admin.dashboard', compact('debates', 'scrabbles', 'speeches', 'newscastings'));
    }
}
