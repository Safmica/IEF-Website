<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class FileDownloadController extends Controller
{
    public function download($folder, $filename)
    {
        $path = 'private/' . $folder . '/' . $filename;

        if (!Storage::exists($path)) {
            return response()->json([
                'success' => false,
                'message' => 'File tidak ditemukan'
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->file(Storage::path($path));
    }
}
