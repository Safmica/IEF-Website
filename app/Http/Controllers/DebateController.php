<?php

namespace App\Http\Controllers;

use App\Models\RegistDebate;
use Illuminate\Http\Request;

class DebateController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel regist_debate
        $debates = RegistDebate::all();
        return view('admin.data-debate', compact('debates'));
    }
}
