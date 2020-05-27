<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiContactController extends Controller
{

    public function contact(Request $request)
    {
    //    $message = $request->input('message');
        $message = 'Bonjour !';

        $to_email = 'gabin.depaire@ynov.com';
        $headers = array("From: gabin.depaire@gmail.com",
            "Reply-To: replyto@example.com",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $headers = implode("\r\n", $headers);
        
    //    $headers = $request->input('mail');
        $check = mail("gabin.depaire@ynov.com","contact eshop",$message,$headers, "");

        return response()->json([
            'success' => true,
            'check' => $check,
        ]);

    }

    // public function mail()
    // {
    //     $to      = 'gabindepaire@hotmail.fr';
    //     $subject = "Message Eshop";
    //     $message = 'Bonjour !';
    //     $headers = 'From: gabindepaire@hotmail.fr' . "\r\n" .
    //     'Reply-To: webmaster@example.com' . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();
   
    //     $check = mail($to, $subject, $message, $headers);

    //     return response()->json([
    //         'mail' => $check,
    //     ]);
    // }
}
