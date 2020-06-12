<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Notifications\ResetPasswordRequest;
use App\PasswordReset;
use App\User;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('email.forgotPassword');
    }

    public function sendMail(Request $request)
    {
        $user = User::where('email', $request->email)->firstOrFail();
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
        return back()->with('success', 'A reset password link has been sent to your email.
            Please check and open the link to reset your password');
    }

    public function resetPassword($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        return view('email.resetPassword', compact('passwordReset'));
    }

    public function newPass(Request $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        $user = User::where('email', $passwordReset->email)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->save();
        $passwordReset->delete();

        return redirect()->route('admin.login');
    }
}
