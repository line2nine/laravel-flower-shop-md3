<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordUserRequest;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    function edit($id)
    {
        $user = $this->userService->find($id);
        if (Auth::user()->id == $user->id || Auth::user()->role == Role::ADMIN) {
            return view('users.edit', compact('user'));
        }
        return abort(403);
    }

    function update(EditUserRequest $request, $id)
    {
        $user = $this->userService->find($id);
        $this->userService->update($user, $request);
        toast('Update Completed', 'success')->position('top');
        return redirect()->route('user.list');
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

    function userDetail($id)
    {
        $user = $this->userService->find($id);
        return view('users.detail', compact('user'));
    }

    function delete($id)
    {
        $user = $this->userService->find($id);
        $filePath = $user->image;
        $user->delete();
        if ($filePath !== 'images/default-avatar.png' && $filePath !== 'images/default-admin.png') {
            Storage::delete("public/" . $filePath);
        }
        notify("Deleted user $user->name", 'success');
        return redirect()->route('user.list');
    }
}
