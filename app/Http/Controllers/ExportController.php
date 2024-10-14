<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DebateExport;
use App\Exports\SpeechExport;
use App\Exports\ScrabbleExport;
use App\Exports\NewscastingExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function exportDebate()
    {
        return Excel::download(new DebateExport, 'debates.xlsx');
    }

    public function exportScrabble()
    {
        return Excel::download(new ScrabbleExport, 'scrabbles.xlsx');
    }

    public function exportNewscasting()
    {
        return Excel::download(new NewscastingExport, 'newscastings.xlsx');
    }

    public function exportSpeech()
    {
        return Excel::download(new SpeechExport, 'speeches.xlsx');
    }
}