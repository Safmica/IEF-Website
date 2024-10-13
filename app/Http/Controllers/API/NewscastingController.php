<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Newscasting;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Log;

class NewscastingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info("Before validation");
            $request->validate([
                'full_name' => 'required|string|max:255',
                'gender' => 'required|string|max:50',
                'student_id_number' => 'required|string|max:100',
                'major' => 'required|string|max:255',
                'faculty' => 'required|string|max:255',
                'university' => 'required|string|max:255',
                'nationality' => 'required|string|max:100',
                'phone_number' => 'required|string|max:50',
                'email_address' => 'required|email|max:255',
                'photo' => 'required|file|mimes:jpeg,png,jpg|max:2048',
                'id_student_card' => 'required|file|mimes:jpeg,png,jpg|max:2048',
                'registration_proof' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            ]);

            $registrationProofPath = $request->file('registration_proof')->store('private/registration_proofs');
            $photoPath = $request->file('photo')->store('private/photo');
            $idStudentCardPath = $request->file('id_student_card')->store('private/id_student_cards');

            $data = Newscasting::create([
                'id_user' => $request->input('id'),
                'full_name' => $request->input('full_name'),
                'gender' => $request->input('gender'),
                'student_id_number' => $request->input('student_id_number'),
                'major' => $request->input('major'),
                'faculty' => $request->input('faculty'),
                'university' => $request->input('university'),
                'nationality' => $request->input('nationality'),
                'phone_number' => $request->input('phone_number'),
                'email_address' => $request->input('email_address'),
                'photo' => route('download', ['folder' => 'photo', 'filename' => basename($photoPath)]),
                'id_student_card' => route('download', ['folder' => 'id_student_cards', 'filename' => basename($idStudentCardPath)]),
                'registration_proof' => route('download', ['folder' => 'registration_proofs', 'filename' => basename($registrationProofPath)]),
            ]);

            $id = $request->input('id');

            User::where('id', $id)->update([
                'newscasting' => "Verification",
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Registration successful',
                'data' => $data
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error("Validation failed: " . json_encode($e->errors()));
            return response()->json([
                'success' => false,
                'message' => 'Terdapat kesalahan',
                'data' => $e->errors(),
            ], 422);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
