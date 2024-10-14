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
        $debates = RegistDebate::all();
        return view('admin.data-debate', compact('debates'));
    }

    public function show($id)
    {
        $debate = RegistDebate::findOrFail($id);
        
        return view('admin.detail-debate', compact('debate'));
    }
}