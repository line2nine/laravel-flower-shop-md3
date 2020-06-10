@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Change Password</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
            </ol>
        </div>
        <div class="col-sm-3">
            <div class="btn-group float-sm-right">
                <button type="button" class="btn btn-light waves-effect waves-light"><i
                        class="fa fa-cog mr-1"></i> Setting
                </button>
                <button type="button"
                        class="btn btn-light dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                        data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <div class="dropdown-menu">
                    <a href="javaScript:void();" class="dropdown-item">Action</a>
                    <a href="javaScript:void();" class="dropdown-item">Another action</a>
                    <a href="javaScript:void();" class="dropdown-item">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a href="javaScript:void();" class="dropdown-item">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form id="personal-info" action="{{route('user.changePass', $user->id)}}" method="post">
                        @csrf
                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-user-circle-o"></i>
                            Change Your Password
                        </h4>
                        <div class="form-group row">
                            <label for="input-2" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-2" name="username"
                                       value="{{$user->name}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-3" class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-3" name="oldPass"
                                       required>
                                @if($errors->first('oldPass'))
                                    <p class="text-danger">{{$errors->first('oldPass')}}</p>
                                @endif
                                @if(\Illuminate\Support\Facades\Session::has('error'))
                                    <p class="text-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-4" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-4" name="newPass"
                                       required>
                                @if($errors->first('newPass'))
                                    <p class="text-danger">{{$errors->first('newPass')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-4" class="col-sm-2 col-form-label">Confirm New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="input-4" name="confirmPass"
                                       required>
                                @if($errors->first('confirmPass'))
                                    <p class="text-danger">{{$errors->first('confirmPass')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-round px-5"><i class="icon-lock"></i>
                                Update
                            </button>
                            <a class="btn btn-light btn-round px-5" href="{{route('admin.dashboard')}}"><i
                                    class="icon-lock"></i>
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
