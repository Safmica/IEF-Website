<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        try {
            // Validasi data
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            // Debug data yang diterima
            Log::info('Data yang diterima untuk signup: ', $request->all());

            // Buat pengguna baru
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Debug data pengguna yang dibuat
            Log::info('Pengguna yang dibuat: ', $user->toArray());

            return response()->json(['message' => 'User registered successfully!', 'user' => $user], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred during registration.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    public function loginUser(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        // Log untuk debug
        Log::info('Attempting login for email: ' . $request->email);
    
        // Coba autentikasi pengguna
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil, kembalikan data user
            $user = Auth::user();
            Log::info('Login successful for user: ' . $user->email);
    
            return response()->json([
                'message' => 'Login successful!',
                'user' => $user
            ], 200);
        } else {
            // Jika gagal autentikasi, kembalikan pesan error
            Log::warning('Login failed for email: ' . $request->email);
    
            return response()->json([
                'message' => 'Invalid credentials, please try again.'
            ], 401);
        }
    }
    
}