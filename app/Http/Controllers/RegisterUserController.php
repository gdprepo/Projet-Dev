<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class RegisterUserController extends Controller
{
    public function register(Request $request)
    {

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->mail;
        $user->password = Hash::make($request->password);
        $user->image = $request->image;
        $user->role = "user";

        try {
            $user->save();
        } catch (\Exception $e) {
            return response()->json([
                'log' => $e,
            ]);
        }

        return response()->json([
            'success' => true,
            'name' => $request->image,

        ]);
    }
}
