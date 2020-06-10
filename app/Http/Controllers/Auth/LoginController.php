<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showFormLogin()
    {
        return view('admin.login');
    }

    function login(LoginRequest $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = [
            'email' => $username,
            'password' => $password
        ];

        if (Auth::attempt($user)) {
            notify("Long time no see, let work!!!", 'success', 'Welcome!');
            return redirect()->route('admin.dashboard');
        } else {
            notify('Please re-check email or password', 'error', 'Something wrong!');
            return back();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
