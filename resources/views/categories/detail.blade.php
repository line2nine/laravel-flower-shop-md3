@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Category Detail</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card profile-card-2">
                <div class="card-img-block">
                    <p>{{$category->name}}</p>
                </div>

            </div>
            <a class="btn btn-primary btn-round px-3" href="{{route('category.edit',['id'=>$category->id])}}"><i
                    class="icon-settings"></i>
                Edit
            </a>
            <a class="btn btn-light btn-round px-3" href="{{route('category.index')}}"><i class="icon-logout"></i>
                Back
            </a>
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                               class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Product in category</span></a>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane active" id="profile">
                            <h5 class="mb-3">Product in category</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Category Table</h5>
                                                    @if(\Illuminate\Support\Facades\Session::has('success'))
                                                        <p class="text-success">
                                                            <i class="fa fa-check"
                                                               aria-hidden="true"></i>{{ Session::get('success') }}
                                                        </p>
                                                    @endif
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">STT</th>
                                                                <th scope="col">Name Product</th>
                                                                <th scope="col">Price</th>
                                                                <th scope="col">Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @forelse($products as $key=>$product)
                                                                <tr>
                                                                    <th scope="row">{{++$key}}</th>
                                                                    <td>{{$product->name}}</td>
                                                                    <td>{{$product->price}}</td>
                                                                    <td>
                                                                        <a class="btn btn-success" href="{{route('product.edit',['id'=>$product->id])}}">Edit</a>
                                                                        <a class="btn btn-success" href="{{route('product.detail',['id'=>$product->id])}}">Detail</a>
                                                                        <a class="btn btn-danger" href="{{route('product.delete',['id'=>$product->id])}}"
                                                                           onclick="return confirm('Are you sure to delete?')">Delete</a>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td>No data</td>
                                                                </tr>
                                                            @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
