@extends('admin.master')
@section('content')

    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Categories</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('category.index')}}">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div>
        <div class="col-sm-3">

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
                                <th scope="col">Name Categories</th>
                                <th scope="col">Number</th>
                                <th scope="col">Create Date</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $key=>$category)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td><a href="{{route('category.detail',['id'=>$category->id])}}">{{$category->name}}</a></td>
                                    <td>{{$category->total()}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <a class="btn btn-white btn-round px-3" href="{{route('category.edit',['id'=>$category->id])}}">Edit</a>
                                        <a class="btn btn-danger btn-round px-3" href="{{route('category.delete',['id'=>$category->id])}}"
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
    </div><!--End Row-->

@endsection
