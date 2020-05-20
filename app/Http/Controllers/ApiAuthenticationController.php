<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class ApiAuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', '=', $request->input('mail'))->first();
  
        if (Hash::check($request->input('password'), $user->password)) {
            $user->token = md5(uniqid(mt_rand(), true));
            $user->save();

            return response()->json([
                'success' => true,
                'token' => $user->token,
            ]);
        }

        return response()->json([
            'success' => false,
        ]);
    }
}
