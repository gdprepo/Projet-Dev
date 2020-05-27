<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\User;

class ConfirmerCommandController extends Controller
{
    public function confirmer(Request $request)
    {
        $user = User::where('token', '=', $request->input('token'))->first();
        $commands = Command::where('user_id', '=', $user->id)->orderBy('created_at', 'desc')->first();
        $total = $request->input('total');


        //$order = Order::findOrFail($orderId);
    
        Mail::to($request->input('mail'))->send($request->input('message'));


        return response()->json([
            'success' => true,
            'total' => $total,
            'commands' => $commands,
        ]);
    }
}
