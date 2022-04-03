<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\mail_verification;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function index()
    {
        $details = [
            'title' => 'Mail from websitepercobaan.com',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('philipsjp12@gmail.com')->send(new mail_verification($details));

        dd("Email sudah terkirim.");
    }
}
