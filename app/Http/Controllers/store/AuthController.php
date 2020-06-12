<?php


namespace App\Http\Controllers\store;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Account;
use App\Product;
use App\User;
use App\Http\Requests\AuthRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function showFormLogin()
    {
        return view('auth.login');
    }

    public function UserLogin(AuthRequests $requests)
    {
        $email = $requests->email;
        $password = $requests->password;

        $user = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($user)) {

            $message = "dang nhap thanh cong";
            session()->flash('login-success', $message);
            return redirect()->route('index');


        } else {
            $message = "mat khau khong trung khop";
            session()->flash('login-error', $message);
            return back();
        }

    }

    public function register()
    {
        return view('store.register');
    }

    public function store(Request $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
//        $user->password = $request->input('password');
        if ($request->password == $request->password2) {
            $user->password = Hash::make($request->password);
        } else {
            $message = "mat khau khong trung khop";
            session()->flash('create-error', $message);
            return redirect()->back();
        }
        $user->save();
        $message2 = "dang ki thanh cong";
        session()->flash('create-success', $message2);

        return redirect()->route('login');
    }


    public function account()
    {

        if (Auth::check()) {
            $account = Auth::user();
            return view('store.account', compact('account'));
        } else {
            $message = "ban chua dang nhap";
            session()->flash('chuanhap-error', $message);
            return view('index');
        }

    }

    public function forgot()
    {
        $account = Auth::user();
        return view('store.forgot', compact('account'));
    }

    public function update(Request $request)
    {

        $forgot = User::findOrFail($request->input('id'));
        $forgot->name = $request->input('name');
        $forgot->email = $request->input('email');
        $forgot->address = $request->input('address');
        $forgot->phone = $request->input('phone');
        $forgot->password = Hash::make($request->password);

        $forgot->save();

//        $message2 = "sua thanh cong";
//        session()->flash('create-forgot', $message2);

        return redirect()->route('account');
    }

    public function logout()
    {
        Auth::logout();
        $message2 = "dang xuat thanh cong";
        session()->flash('logout', $message2);
        return redirect()->route('index');
    }

}
