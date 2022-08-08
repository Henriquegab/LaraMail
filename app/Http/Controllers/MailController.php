<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\LaraMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('henriquepro8@gmail.com')->send(new LaraMail($details));

        dd("Email is Sent.");
    }

}
