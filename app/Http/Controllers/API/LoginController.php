<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $auth = Auth::user();
            $success['token'] = $auth->createToken('auth_token')->plainTextToken;
            $success['name'] = $auth->name;
            return response()->json([
                'success'=>true,
                'message'=>'Login berhasil',
                'data'=>$success
            ]);
        } else {
            return response()->json([
                'success'=>false,
                'message'=>'Login gagal',
                'data'=>''
            ]);
        }
    }
}