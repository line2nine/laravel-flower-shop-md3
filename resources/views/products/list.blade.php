@extends('admin.master')
@section('content')
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Products List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Products List</div>
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="default-datatable" class="table table-bordered">
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
                                    <td><img src="{{asset('storage/'.$product->image)}}" class="avatar" alt="avatar">
                                    </td>
                                    <td>
                                        <a href="{{ route('product.detail',['id'=>$product->id]) }}">{{$product->name}}</a>
                                    </td>
                                    <td>${{number_format($product->price)}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>
                                        <a class="btn btn-white btn-round px-3"
                                           href="{{route('product.update',['id'=>$product->id])}}"><i
                                                class="icon-settings"></i>Edit</a>
                                        <a class="btn btn-danger btn-round px-3"
                                           href="{{route('product.delete',['id'=>$product->id])}}"
                                           onclick="return confirm('Are you sure to delete?')"><i
                                                class="icon-trash"></i>Delete</a>
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
@endsection
