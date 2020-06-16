@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Simple Tables</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Edit User</div>
                    <hr>
                    <form action="{{route('user.edit', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="input-26" class="col-sm-2 col-form-label"><img src="{{asset('storage/' . $user->image)}}" class="avatar"></label>
                            <div class="col-sm-10">
                                <input type="file" name="image" class="form-control form-control-rounded" id="input-26">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-26" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{$user->name}}" class="form-control form-control-rounded" id="input-26"
                                       placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-27" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{$user->email}}" class="form-control form-control-rounded" id="input-27"
                                       placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-28" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" name="phone" value="{{$user->phone}}" class="form-control form-control-rounded"
                                       id="input-28"
                                       placeholder="Enter Your Mobile Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-28" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" value="{{$user->address}}" class="form-control form-control-rounded"
                                       id="input-28"
                                       placeholder="Enter Your Address">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Status</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="status">
                                <option value="{{\App\Http\Controllers\UserStatus::ACTIVE}}">Active</option>
                                <option value="{{\App\Http\Controllers\UserStatus::BANNED}}">Banned</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary btn-round px-5"><i class="icon-lock"></i>
                                    Update
                                </button>
                                <a class="btn btn-light btn-round px-5" href="{{route('user.list')}}"><i
                                        class="icon-lock"></i>
                                    Update
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
