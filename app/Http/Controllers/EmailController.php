<?php
// app/Http/Controllers/EmailController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Mail;

class EmailController extends Controller
{
    public function index()
    {
        $email = [
            'title' => 'Mail from laravel website',
            'body' => 'This is testing email using smtp',
        ];
        Mail::to('jitendrakumar00632@gmail.com')->send(new SendMail($email));
        dd('email sent successfully!!');
    }
}
