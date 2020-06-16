
@extends('../master')
@section('main')




    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area common-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Chỉnh sữa thông tin</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chỉnh sữa thông tin</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper section-space pb-0">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Register Content Start -->
                        <div class="col-lg-10">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h2>Chỉnh sửa</h2>

                                {{session('create-forgot')}}
                                <form action="{{route('update')}}" method="post">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="hidden" name="id" placeholder="Full Name" required value="{{$account->id}}" />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" name="name" placeholder="Full Name" required value="{{$account->name}}" />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" placeholder="Enter your Email" required  name="email" value="{{$account->email}}"/>
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" placeholder="Enter your Address" required name="address" value="{{$account->address}}" />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="number" placeholder="Enter your Phone" required name="phone" value="{{$account->phone}}" />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" placeholder="Enter your Password" required name="password" />
                                            </div>
                                        </div>
{{--                                        <div class="col-lg-6">--}}
{{--                                            <div class="single-input-item">--}}
{{--                                                <input type="password" placeholder="Repeat your Password" required name="password2" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn__bg" type="submit" style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">Edit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->

@stop
