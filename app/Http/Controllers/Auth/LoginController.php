<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

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
