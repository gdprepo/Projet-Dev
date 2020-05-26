<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiContactController extends Controller
{

    public function contact(Request $request)
    {
        $message = $request->input('message');
        $to_email = 'gabindepaire@hotmail.fr';
        $headers = $request->input('mail');
        mail($to_email,"contact eshop",$message,$headers);

        return response()->json([
            'success' => true,
        ]);

    }
}
