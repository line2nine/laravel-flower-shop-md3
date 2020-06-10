<?php


namespace App\Http\Controllers\store;


use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showFormLogin(){

        return view('store.login');
    }

//    public function UserLogin(UserLoginRequests $requests){
//
//
//        $username = $requests->username;
//        $password = $requests->password;
//
//        $user = [
//            'username' => $username,
//            'password' =>$password
//        ];
//        if (Auth::attempt($user)){
//
//            $message = "dang nhap thanh cong";
//            session()->flash('login-success',$message);
//            return redirect()->route('index');
//
//
//        } else {
//            $message = "mat khau khong trung khop";
//            session()->flash('login-error',$message);
//            return back();
//        }
//
//    }

}