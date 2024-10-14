<?php

namespace App\Http\Controllers;

use App\Exports\DebateExport;
use App\Models\RegistDebate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DebateController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel regist_debate
        $debates = RegistDebate::all();
        return view('admin.data-debate', compact('debates'));
    }
}