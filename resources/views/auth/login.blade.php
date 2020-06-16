
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
                                <h1>Đăng nhập</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
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
                        <!-- Login Content Start -->
                        <div class="col-lg-10">
                            <div class="login-reg-form-wrap">
                                {{session('create-success')}}
                                {{session('login-error')}}
                                <h2>Đăng nhập</h2>
                                <form action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Email or Username" required  />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password" name="password" placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Nhớ mật khẩu</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="row">
                                            <button type="submit" class="btn btn__bg" style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">Đăng nhập</button>
                                            <a  href="{{ url('auth/google') }}">
                                                <strong>Login With Google</strong></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->


                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
    </main>
    <!-- main wrapper end -->

@stop
