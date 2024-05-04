<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;
        $mailData = [
            'url' => 'https://noviherlambang.my.id/',
        ];
        $send_mail = "noovv9@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $subject, $message));
        $senderMessage = "Your message has been sent, we will reply you in later.";
        Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $mailData));
        return back()->with('success', 'Thank you for your message!');
    }
}
