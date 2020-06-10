@extends('admin.master')
@section('content')

    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Products</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Category Table</h5>
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                        </p>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Images</th>
                                <th scope="col">Name Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Categories</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $key=>$product)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td><img src="{{$product->image}}" alt="avatar"></td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>
                                        <a class="btn btn-success" href="#">Edit</a>
                                        <a class="btn btn-success">Detail</a>
                                        <a class="btn btn-danger" href="#"
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
                        {{--                                {!! $products->links() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
