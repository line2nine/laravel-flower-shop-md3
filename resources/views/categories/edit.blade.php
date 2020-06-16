@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Edit Category</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="card-title">Edit Category</div>
                <hr>
                <form action="{{route('category.update',['id'=>$category->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="input-6">Name Category</label>
                        <input type="text" class="form-control form-control-rounded" id="input-6" value="{{$category->name}}" name="name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
