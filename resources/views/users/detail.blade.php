@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">User Profile</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('user.list')}}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{asset('storage/images/default-background-profile.jpg')}}"
                         alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    <img src="{{asset('storage/' . $user->image)}}" alt="profile-image" class="profile">
                    <h5 class="card-title">{{strtoupper($user->name)}}</h5>
                    @if(\Illuminate\Support\Facades\Auth::user()->role == \App\Http\Controllers\Role::ADMIN)
                        <p class="card-text">Admin</p>
                    @else
                        <p class="card-text">Customer</p>
                    @endif
                </div>
            </div>
            <a class="btn btn-primary btn-round px-3" href="{{route('user.edit', $user->id)}}"><i class="icon-settings"></i>
                Edit
            </a>
            <a class="btn btn-light btn-round px-3" href="{{route('user.list')}}"><i class="icon-logout"></i>
                Back
            </a>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                               class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3" style="text-align: center">User Profile</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Name</h6>
                                    <p>
                                        {{$user->name}}
                                    </p>
                                    <h6>Email</h6>
                                    <p>
                                        {{$user->email}}
                                    </p>
                                    <h6>Phone</h6>
                                    <p>
                                        {{$user->phone}}
                                    </p>
                                    <h6>Address</h6>
                                    <p>
                                        {{$user->address}}
                                    </p>
                                    <h6>Join On</h6>
                                    <p>
                                        {{$user->created_at}}
                                    </p>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
