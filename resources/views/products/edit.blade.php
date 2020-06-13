@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Create Product</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Create Product</div>
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <p class="text-success">
                            <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                        </p>
                    @endif
                    <hr>
                    {{dd($product)}}
                    <form method="post" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="input-1">Name Product</label>
                            <input type="text" class="form-control" id="input-1" name="name" value="{{$product->name}}"
                                   placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Price Product</label>
                            <input type="text" class="form-control" id="input-2" name="price" value="{{$product->price}}"
                                   placeholder="Enter Your Price">
                        </div>
                        <div class="form-group">
                            <label for="input-4">Image Product</label>
                            <img src="{{asset('storage/'.$product->image)}}" style="width: 50px;" alt="anh cu">
                            <input type="file" class="form-control" id="input-4" name="image">
                        </div>
                        <div class="form-group">
                            <label for="basic-select" class="col-form-label">Category Product</label>
                            <div class="col-md-12">
                                <select class="form-control" id="basic-select" name="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                        @if($category->id == $product->category_id)
                                            selected
                                            @endif
                                        >
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input-9" class="col-md-12 col-form-label">Description Product</label>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="4" id="input-9" name="description">{!! $product->description !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary px-5"><i class="icon-lock"></i> Update</button>
                            <a class="btn btn-light" href="{{route('product.index')}}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--End Row-->
@endsection
