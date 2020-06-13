@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Blogs</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">Dashtreme</a></li>
                <li class="breadcrumb-item"><a href="javaScript:void();">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Blogs table</div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <p class="text-success">
                                <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                            </p>
                        @endif
                        <table id="default-datatable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($blogs as $key=>$blog)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><a href="#">{{$blog->name}}</a></td>
                                    <td>{{$blog->category_id}}</td>
                                    <td>{{$blog->created_at}}</td>
                                    <td>{!! mb_substr($blog->content, 0, 10) !!}</td>
                                    <td>
                                        <a class=" btn btn-success btn-round px-2" href="{{route('blog.edit',['id'=>$blog->id])}}"><i class="icon-settings"></i>
                                            Edit</a>
                                        <a class="btn btn-danger btn-round px-2" onclick="return confirm('Are You Sure Delete Blog?')" href="{{route('blog.destroy',['id'=>$blog->id])}}"><i class="icon-trash"></i>
                                            Delete
                                        </a>
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
