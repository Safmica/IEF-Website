<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AuthUser;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class SignUpController extends Controller
{

//     Handle Request dari users yang ingin membuat akun baru
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required','min:3'],
            'email' => ['required', 'string', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'confirm_password'=> ['required', 'same:password']
        ]);

        if($validator->fails()){
            return response()->json([
                'success'=>false,
                'message'=>'Terdapat kesalahan',
                'data'=>$validator->errors()
            ]);

        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $auth = AuthUser::create($input);

        $success['token'] = $auth->createToken('auth_token')->plainTextToken;
        $success['name'] = $auth->name;
        return response()->json([
            'success'=>true,
            'message'=>'Registrasi berhasil',
            'data'=>$success
        ]);
    }
}
