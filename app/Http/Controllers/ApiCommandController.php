<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Command as CommandResource;
use App\Command;
use App\User;

class ApiCommandController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('token', '=', $request->input('token'))->first();

        if (!$user) {
            return response()->json([
                'command' => "",
            ]);
        }
        return response()->json([
            'command' => CommandResource::collection(Command::where('user_id', '=', $user->id)->get()),
        ]);
    }

}
