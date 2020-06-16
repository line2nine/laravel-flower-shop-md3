<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('email.forgotPassword');
    }
    public function send(Request $request)
    {

        $email = $request->email;
        $user = User::where('email','=',$email)->get();

        $detail = [
            'title'=>'Change password Admin',
            'body'=>"click to link: "
        ];
        if ($user->count() > 0){
            Mail::to($email)->send(new SendMail($detail));
            return back()->with('success', 'A reset password link has been sent to your email.
            Please check and open the link to reset your password');
        } else {
            return "ko co";
        }
    }

}
