<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showDashboard()
    {
        return view('admin.master');
    }

    function getAll()
    {
        $users = $this->userService->getAll();
        return view('users.list', compact('users'));
    }

    function create()
    {
        return view('users.create');
    }

    function store(CreateUserRequest $request)
    {
        $this->userService->create($request);
        \alert("Created Successful", '', 'success');
        return redirect()->route('admin.dashboard');
    }

    function changePass($id)
    {
        $user = $this->userService->find($id);
        return view('users.changePass', compact('user'));

    }

    function updatePass(ChangePasswordUserRequest $request, $id)
    {
        $user = $this->userService->find($id);
        if ($this->userService->checkPass($request)) {
            $this->userService->changePass($user, $request);
            alert('Successful', 'Your password has been changed', 'success');
            return redirect()->route('admin.dashboard');
        }
        return back()->with('error', 'Wrong current password, try again');
    }
}
