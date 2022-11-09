<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);
        $data = $request->all();
        $user = User::where('email', $data["email"])->first();
        if(!$user || !Hash::check($data["password"], $user->password)){
            return response()->json([
                "status" => false,
                "message"=> "Email atau password yang anda masukan salah"
            ]);
        }

        $user->tokens()->delete();
        $token = $user->createToken('authenticated', [$user->email, $user->name])->plainTextToken;
        return response()->json([
            "status" => true,
            "message"=> "Berhasil login.",
            "accessToken" => 'Bearer '.$token,
            "data" => [
                "nama" => $user->name,
                "email" => $user->email,
            ]
        ]);
    }
}
