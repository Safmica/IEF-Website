<?php

namespace App\Http\Controllers;

use App\Exports\DebateExport;
use App\Models\Debate;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DebateController extends Controller
{
    public function index()
    {
        $debates = Debate::all();
        return view('admin.data-debate', compact('debates'));
    }

    public function exportDebate()
    {
        $debate = Debate::all();
        
        return view('admin.export-debate', compact('debate'));
    }

    public function show($id)
    {
        $debate = Debate::findOrFail($id);
        
        return view('admin.detail-debate', compact('debate'));
    }
}