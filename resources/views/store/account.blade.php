
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
                                <h1>Tài khoản</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tài khoản của tôi</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- my account wrapper start -->
        <div class="my-account-wrapper section-space pb-0">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- My Account Page Start -->
                            <div class="myaccount-page-wrapper">
                                <!-- My Account Tab Menu Start -->
                                <div class="row">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="myaccount-tab-menu nav" role="tablist">
{{--                                            <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>--}}
{{--                                                Dashboard</a>--}}
                                            <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i>
                                                Giõ hàng</a>
{{--                                            <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i>--}}
{{--                                                address</a>--}}
                                            <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                                Details</a>
                                            <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Đăng xuất</a>
                                        </div>
                                    </div>
                                    <!-- My Account Tab Menu End -->

                                    <!-- My Account Tab Content Start -->
                                    <div class="col-lg-9 col-md-8">
                                        <div class="tab-content" id="myaccountContent">
                                            <!-- Single Tab Content Start -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade active" id="orders" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Orders</h3>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Đặt hàng</th>
                                                                    <th>Ngày đặt</th>
                                                                    <th>Trạng thái</th>
                                                                    <th>Tổng tiền</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Aug 22, 2019</td>
                                                                    <td>Pending</td>
                                                                    <td>$3000</td>
                                                                    <td><a style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" href="{{route('cart.view')}}" class="btn btn__bg">Xem</a>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="download" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Downloads</h3>
                                                    <div class="myaccount-table table-responsive text-center">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Product</th>
                                                                    <th>Date</th>
                                                                    <th>Expire</th>
                                                                    <th>Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Flowers daisy pink stick</td>
                                                                    <td>Aug 22, 2019</td>
                                                                    <td>Yes</td>
                                                                    <td><a href="#" class="btn btn__bg"><i
                                                                        class="fa fa-cloud-download"></i>
                                                                            Download File</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Orchid flower red stick</td>
                                                                    <td>Sep 12, 2019</td>
                                                                    <td>Never</td>
                                                                    <td><a href="#" class="btn btn__bg"><i
                                                                        class="fa fa-cloud-download"></i>
                                                                            Download File</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Tab Content End -->

                                            <!-- Single Tab Content Start -->
                                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                                <div class="myaccount-content">
                                                    <h3>Chi tiết tài khoản</h3>
                                                    <div class="account-details-form">
                                                        <table class="table table-bordered">
                                                                        <thead class="thead-light">
                                                                        <tr>
                                                                            <th>Tên tài khoản</th>
                                                                            <th>Email</th>
                                                                            <th>Số điện thoại</th>
                                                                            <th>Địa Chỉ</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        <tr>
                                                                            <td>{{$account->name}}</td>
                                                                            <td>{{$account->email}}</td>
                                                                            <td>{{$account->phone}}</td>
                                                                            <td>{{$account->address}}</td>
                                                                            <td><a href="{{route('forgot'), $account->id}}" class="btn btn__bg"><i class="fa fa-edit"></i>Edit</a></td>

                                                                            </tr>

                                                                            </tbody>
                                                                        </table>
                                                        </div>
                                                    </div>
                                                </div> <!-- Single Tab Content End -->
                                            </div>
                                        </div> <!-- My Account Tab Content End -->
                                    </div>
                                </div> <!-- My Account Page End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- my account wrapper end -->
        </main>
        <!-- main wrapper end -->


    @stop
