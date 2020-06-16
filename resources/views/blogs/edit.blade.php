@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Write Blog</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                        </p>
                    @endif
                    <form id="personal-info" method="post" enctype="multipart/form-data" action="{{route('blog.update',['id'=>$blog->id])}}">
                        @csrf
                        <h4 class="form-header">
                            <i class="fa fa-file-text-o"></i>
                            Edit Blog
                        </h4>
                        <div class="form-group row">
                            <label for="input-5" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-5" name="title" value="{{$blog->name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-6" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="input-6" name="category" required>
                                    @foreach($categories as $category)
                                        <option
                                            @if($category->id == $blog->category_id )
                                            selected
                                            @endif
                                            value="{{$category->id}}">
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-8" class="col-sm-2 col-form-label">Image</label>
{{--                            <img src="{{asset('storage/'. $blog->image)}}" alt="blog" style="width: 80px;">--}}
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="input-8" name="image" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-9" class="col-sm-2 col-form-label">Content</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" id="input-9" name="editor1" required>{!! $blog->content !!}</textarea>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE
                            </button>
                            <a href="{{route('blog.index')}}" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
