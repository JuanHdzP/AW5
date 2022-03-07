<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

use App\Models\User;

class LoginController extends Controller
{

public function login(Request $request)
{
    $data = $request->validate([
        'email' => 'email|required',
        'password' => 'required'
    ]);

    $user = User::where('email',$data['email'])->first();
    
    if (!$user ||  !Hash::check($data['password'],$user->password)){
        return response (['message'=>'Credenciales invalidas'],401);
    }
    else
    {
        $token=$user->createToken('auth-token')->plainTextToken;
        $response=[
            'user'=>$user,
            'token'=>$token,
        ];
        return response ($response,200);
    }
    
}

public function logout(Request $request)
    {
            auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return [
            'message' => 'Sesion cerrada',
        ];
    }

}