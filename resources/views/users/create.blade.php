@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Create New User</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create New User</li>
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
                    <div class="card-title">Fill out the form to create new user</div>
                    <hr>
                    <form action="{{route('user.create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-6">Name</label>
                            <input type="text" name="name" class="form-control form-control-rounded"
                                   id="input-6"
                                   placeholder="Enter Your Username">
                            @if($errors->first('name'))
                                <p class="text-danger">{{$errors->first('name')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="input-7">Email</label>
                            <input type="email" name="email" class="form-control form-control-rounded"
                                   id="input-7" placeholder="Enter Your Email Address">
                            @if($errors->first('email'))
                                <p class="text-danger">{{$errors->first('email')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="input-7">Phone</label>
                            <input type="number" name="phone" class="form-control form-control-rounded"
                                   id="input-7" placeholder="Enter Your Phone Number">
                            @if($errors->first('phone'))
                                <p class="text-danger">{{$errors->first('phone')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="input-7">Address</label>
                            <input type="text" name="address" class="form-control form-control-rounded"
                                   id="input-7" placeholder="Enter Your Address">
                            @if($errors->first('address'))
                                <p class="text-danger">{{$errors->first('address')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="input-7">Image</label>
                            <input type="file" name="image" class="form-control form-control-rounded"
                                   id="input-7">
                        </div>
                        <div class="form-group">
                            <label for="input-9">Password</label>
                            <input type="password" name="password" class="form-control form-control-rounded"
                                   id="input-9" placeholder="Enter Password">
                            @if($errors->first('password'))
                                <p class="text-danger">{{$errors->first('password')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="input-10">Confirm Password</label>
                            <input type="password" name="confirmPass" class="form-control form-control-rounded"
                                   id="input-10" placeholder="Confirm Password">
                            @if($errors->first('confirmPass'))
                                <p class="text-danger">{{$errors->first('confirmPass')}}</p>
                            @endif
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Role</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="role">
                                <option value="{{\App\Http\Controllers\Role::ADMIN}}">Admin</option>
                                <option value="{{\App\Http\Controllers\Role::CUSTOMER}}">Customer</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="status">
                                <option value="{{\App\Http\Controllers\UserStatus::ACTIVE}}">Active</option>
                                <option value="{{\App\Http\Controllers\UserStatus::BANNED}}">De-active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-round px-5"><i class="icon-lock"></i>
                                Register
                            </button>
                            <a class="btn btn-light btn-round px-5" href="{{route('admin.dashboard')}}"><i class="icon-lock"></i>
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
