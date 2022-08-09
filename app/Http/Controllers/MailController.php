<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Mail\LaraMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {

    }
    public function store(MailRequest $request)
    {








        $details = [
            'title' => $request->title,
            'body' => $request->content
        ];

        // dd($details);

        Mail::to($request->email)->send(new LaraMail($details));

        return response()->json('sent', 200);

        dd("Email is Sent.");


        dd(json_encode($request->all()));
    }

}
