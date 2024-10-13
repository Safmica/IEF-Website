<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Debate;
use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class DebateController extends Controller
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
                'team_name' => 'required|string|max:255',
                'full_name_s1' => 'required|string|max:255',
                'gender_s1' => 'required|string|max:50',
                'student_id_number_s1' => 'required|string|max:100',
                'major_s1' => 'required|string|max:255',
                'faculty_s1' => 'required|string|max:255',
                'university_s1' => 'required|string|max:255',
                'nationality_s1' => 'required|string|max:100',
                'phone_number_s1' => 'required|string|max:50',
                'email_address_s1' => 'required|email|max:255',
                'photo_s1' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
                'id_student_card_s1' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
                'full_name_s2' => 'required|string|max:255',
                'gender_s2' => 'required|string|max:50',
                'student_id_number_s2' => 'required|string|max:100',
                'major_s2' => 'required|string|max:255',
                'faculty_s2' => 'required|string|max:255',
                'university_s2' => 'required|string|max:255',
                'nationality_s2' => 'required|string|max:100',
                'phone_number_s2' => 'required|string|max:50',
                'email_address_s2' => 'required|email|max:255',
                'photo_s2' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
                'id_student_card_s2' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
                'registration_proof' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            ]);

            Log::info("AFTER validation");

            $registrationProofPath = $request->file('registration_proof')->store('private/registration_proofs');
            $photoPath1 = $request->file('photo_s1')->store('private/photo');
            $idStudentCardPath1 = $request->file('id_student_card_s1')->store('private/id_student_cards');
            $photoPath2 = $request->file('photo_s2')->store('private/photo');
            $idStudentCardPath2 = $request->file('id_student_card_s2')->store('private/id_student_cards');

            $data = Debate::create([
                'id_user' => $request->input('id'),
                'team_name' => $request->input('team_name'),
                'full_name_s1' => $request->input('full_name_s1'),
                'gender_s1' => $request->input('gender_s1'),
                'student_id_number_s1' => $request->input('student_id_number_s1'),
                'major_s1' => $request->input('major_s1'),
                'faculty_s1' => $request->input('faculty_s1'),
                'university_s1' => $request->input('university_s1'),
                'nationality_s1' => $request->input('nationality_s1'),
                'phone_number_s1' => $request->input('phone_number_s1'),
                'email_address_s1' => $request->input('email_address_s1'),
                'photo_s1' => route('download', ['folder' => 'photo', 'filename' => basename($photoPath1)]),
                'id_student_card_s1' => route('download', ['folder' => 'id_student_cards', 'filename' => basename($idStudentCardPath1)]),
                'full_name_s2' => $request->input('full_name_s2'),
                'gender_s2' => $request->input('gender_s2'),
                'student_id_number_s2' => $request->input('student_id_number_s2'),
                'major_s2' => $request->input('major_s2'),
                'faculty_s2' => $request->input('faculty_s2'),
                'university_s2' => $request->input('university_s2'),
                'nationality_s2' => $request->input('nationality_s2'),
                'phone_number_s2' => $request->input('phone_number_s2'),
                'email_address_s2' => $request->input('email_address_s2'),
                'photo_s2' => route('download', ['folder' => 'photo', 'filename' => basename($photoPath2)]),
                'id_student_card_s2' => route('download', ['folder' => 'id_student_cards', 'filename' => basename($idStudentCardPath2)]),
                'registration_proof' => route('download', ['folder' => 'registration_proofs', 'filename' => basename($registrationProofPath)]),
            ]);

            $id = $request->input('id');

            User::where('id', $id)->update([
                'debate' => "Verification",
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
