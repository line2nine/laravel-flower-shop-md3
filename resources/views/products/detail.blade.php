@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Product Detail</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <img class="img-fluid" src="{{asset('storage/'.$product->image)}}"
                         alt="Card image cap">
                </div>
                <div class="card-body pt-5">
                    <img src="{{asset('storage/'.$product->image)}}" alt="profile-image" class="profile">
                    <h5 class="card-title">{{$product->name}}</h5>

                        <p class="card-text">Product</p>

                </div>
            </div>
            <a class="btn btn-primary btn-round px-3" href="{{route('product.edit',['id'=>$product->id])}}"><i class="icon-settings"></i>
                Edit
            </a>
            <a class="btn btn-light btn-round px-3" href="{{route('product.index')}}"><i class="icon-logout"></i>
                Back
            </a>
        </div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                               class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Detail</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">Product Detail</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Name</h6>
                                    <p>
                                        {{$product->name}}
                                    </p>
                                    <h6>Price</h6>
                                    <p>
                                        {{$product->price}}
                                    </p>
                                    <h6>Create</h6>
                                    <p>
                                        {{$product->created_at}}
                                    </p>
                                    <h6>Category</h6>
                                    <p>
                                        {{$product->category->name}}
                                    </p>
                                    <h6>Description</h6>
                                    <p>
                                        {{$product->description}}
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
