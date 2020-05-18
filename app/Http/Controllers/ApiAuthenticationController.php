<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ApiAuthenticationController extends Controller
{
    public function login(Request $request)
    {
      //  $user = User::where('email', '=', $request->mail)->get();
    
        return response()->json([
            'request' => $request->all(),
            'user' => 1,
            'mail' => $request->input('mail'),
            'password' => $request->input('password'),
        ]);
    }
}
