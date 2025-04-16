<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use App\Mail\WelcomeMail;


class MailController extends Controller
{
    // public function sendMail()
    // {
    //     $data = [
    //         'title' => 'Hello from Laravel',
    //         'body' => 'This is a test email sent using a controller.'
    //     ];

    //     Mail::to('recipient@example.com')->send(new SampleMail($data));

    //     return response()->json(['message' => 'Email sent successfully']);
    // }
    public function sendWelcome()
    {
        $data = [
            'name' => 'Shweta'
        ];

        Mail::to('jaiswalshweta021@gmail.com')->send(new WelcomeMail($data));

        return response()->json(['message' => 'Welcome email sent! ✅']);
    }
}
