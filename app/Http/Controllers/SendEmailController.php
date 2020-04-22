<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $request->validate(
        [
            'reason' => ['required'],
            'text' => ['required', 'min:10'],
            'email' => ['required', 'email:rfc,dns']
        ]);

        Mail::raw('mail', function ($message) use ($request) {
            $message->to('dimitrijekocic123@gmail.com')
                    ->subject($request->reason);
            $message->from($request->email);
        });

        //MAILGUN koristiti
    }
}
