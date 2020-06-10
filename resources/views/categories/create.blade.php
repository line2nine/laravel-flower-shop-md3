@extends('admin.master')
@section('content')
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Create Category</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                        <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->


            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Create Category</div>
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                            </p>
                        @endif
                        <hr>
                        <form action="{{route('category.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="input-6">Name Category</label>
                                <input type="text" class="form-control form-control-rounded" id="input-6" name="name" placeholder="Kind of flower">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-round px-5"><i class="icon-lock"></i> Create </button>
                                <a  class="btn btn-light btn-round px-5" href="{{route('category.index')}}"><i class="icon-lock"></i> Cancel </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection
