<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Command;
use App\User;
use App\Product;

class ValidateCommandController extends Controller
{
    public function validatecommand(Request $request) {

        $user = User::where('token', '=', $request->input('token'))->first();

        $command = new Command();
        $command->status = "En cours";
        $command->date = date("F j, Y, g:i a");
        $command->prix = "0";
        $command->user_id = $user->id;

        $command->save();

        $items = [];
        foreach($request->input('product') as $product)
        {
            $items[] = $product['id'];
        }

        $command->products()->sync($items);

        return response()->json([
            'command' => $command,
            'items' => $items,
        ]);


    }
}
