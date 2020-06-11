<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send($email)
    {
        $detail = [
            'title'=>'Change password Admin',
            'body'=>"click to link: $"
        ];
        Mail::to($email)->send(new SendMail($detail));
    }
}
