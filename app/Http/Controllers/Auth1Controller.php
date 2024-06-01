<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use Illuminate\Support\Facades\Hash;

class Auth1Controller extends Controller
{  
    public function register(Request $request)
    {
        $user = new Auth();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $token = $user->createToken('my-token')->plainTextToken;
        return response()->json([
            'token' => $token
        ]);
    }
    public function login(Request $request){
        $user = Auth::where('email',$request->email)->first();
        
        return response()->json([
            'sms'=> 'Bad Request'
        ]);
        $token = $user->createToken('my-token')->plainTextToken;
    }
    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return response()->json([
           'message' => 'Successfully logged out'
        ]);
    }
   
}
