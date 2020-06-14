
@extends('master')
@section('main')
    <!-- main wrapper start -->
    {{session('login-success')}}
    {{session('chuanhap-error')}}
    <p class="text-danger">{{session('logout')}}</p>
    <p class="text-danger">{{session('order-success')}}</p>



    <main>
        <!-- slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->

                <!-- single slider item end -->

                <!-- single slider item start -->
                <div class="hero-single-slide">
                    <div class="hero-slider-item_3 bg-img" data-bg="assets/img/slider/home3-slide2.jpg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hero-slider-content slide-2">
                                        <span>valentine gift</span>
                                        <h1>Fresh Your Mind</h1>
                                        <h2>& Feeling love</h2>
                                        <a style="background: rgb(131,30,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" href="{{route('product.shop')}}" class="btn-hero">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single slider item start -->
            </div>
        </section>
        <!-- slider area end -->

        <!-- service policy start -->
        <section class="service-policy-area section-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/free_shipping.png" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>free shipping</h5>
                                <p>Free shipping all order</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/support247.png" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>SUPPORT 24/7</h5>
                                <p>Support 24 hours a day</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/money_back.png" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>Money Return</h5>
                                <p>30 days for free return</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <!-- start policy single item -->
                        <div class="service-policy-item">
                            <div class="icons">
                                <img src="assets/img/icon/promotions.png" alt="">
                            </div>
                            <div class="policy-terms">
                                <h5>ORDER DISCOUNT</h5>
                                <p>On every order over $15</p>
                            </div>
                        </div>
                        <!-- end policy single item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- service policy end -->

        <!-- trending product area start -->

        <!-- trending product area end -->

        <!-- banner statistics start -->
        <section class="banner-statistics-right">
            <div class="container">
                <div class="row">
                    <!-- start banner item start -->
                    <div class="col-md-6">
                        <div class="banner-item banner-border">
                            <figure class="banner-thumb">
                                <a href="{{route('product.shop')}}">
                                    <img src="assets/img/banner/banner-1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content banner-content-right">
                                    <h2 class="text1">for you</h2>
                                    <h2 class="text2">Tulip Flower</h2>
                                    <a class="store-link" href="{{route('product.shop')}}">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start banner item end -->

                    <!-- start banner item start -->
                    <div class="col-md-6">
                        <div class="banner-item banner-border">
                            <figure class="banner-thumb">
                                <a href="{{route('product.shop')}}">
                                    <img src="assets/img/banner/banner-2.jpg" alt="">
                                </a>
                                <figcaption class="banner-content banner-content-right">
                                    <h2 class="text1">for you</h2>
                                    <h2 class="text2">Flower & Box</h2>
                                    <a class="store-link" href="{{route('product.shop')}}">shop now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start banner item end -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->

        <!-- our product area start-----------------------------------------------------------------------------------------new------------------------------------------- -->
        <section class="our-product section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Sản phẩm nổi bật</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row mtn-40">
                    <!-- product single item start -->
                    @foreach($hot_product as $key => $value)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-item mt-40">
                            <figure class="product-thumb">
                                <a href=""  data-toggle="modal" data-target="#quick_view{{$value->id}}" >
                                    <img class="pri-img" src="{{asset('assets/img/product/product-1.jpg')}}" alt="product">
                                    <img class="sec-img" src="assets/img/product/product-2.jpg" alt="product">
                                </a>
                                <div class="product-badge">
                                    <div  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" class="product-label new">
                                        <span>new</span>
                                    </div>

                                </div>
                                <div class="button-group">
                                    <a href="{{route('wishlist.add',['id'=>$value->id])}}" data-toggle="tooltip" data-placement="left" title="Yêu thích"><i class="lnr lnr-heart"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#quick_view{{$value->id}}"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                    <a href="{{route('cart.add',['id'=>$value->id])}}" data-toggle="tooltip" data-placement="left" title="Thêm vào giỏ hàng"><i class="lnr lnr-cart"></i></a>

                                </div>
                            </figure>
                            <div class="product-caption">
                                <p class="product-name">
                                    <a href="">{{$value->name}}</a>
                                </p>
                                <div class="price-box">
                                    <span class="price-regular">{{number_format($value->price)}} .VND</span>
{{--                                    <span class="price-old"><del>$70.00</del></span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('store.modal')
                @endforeach
                    <!-- product single item end -->

                    <div class="col-12">
                        <div class="view-more-btn">
                            <a class="btn-hero btn-load-more"  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" href="{{route('product.shop')}}">Xem nhiều sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our product area end -->

        <!-- banner statistics start -->
        <section class="banner-statistics">
            <div class="container">
                <div class="row mbn-30">
                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-floda1.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h2 class="text1">Top friday</h2>
                                    <h2 class="text2">Yellow Gold</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-floda2.jpg" alt="">
                                </a>
                                <figcaption class="banner-content text-center">
                                    <h2 class="text1">Black friday</h2>
                                    <h2 class="text2">Orchid stick</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->

                    <!-- start store item -->
                    <div class="col-md-4">
                        <div class="banner-item mb-30">
                            <figure class="banner-thumb">
                                <a href="#">
                                    <img src="assets/img/banner/img1-top-floda3.jpg" alt="">
                                </a>
                                <figcaption class="banner-content">
                                    <h2 class="text1">10% off</h2>
                                    <h2 class="text2">tulip flower</h2>
                                    <a class="store-link" href="#">buy it now</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- start store item -->
                </div>
            </div>
        </section>
        <!-- banner statistics end -->
{{--        -----------------------------------------------------------------------------Xu hướng sản phẩm------------------------------}}
        <!-- trending product area start -->
        <section class="top-sellers section-space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h2>Xu hướng sản phẩm</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-carousel--4 slick-row-15 slick-sm-row-10 slick-arrow-style">
                            <!-- product single item start -->
                            @foreach($top_product as $items)
                            <div class="product-item">
                                <figure class="product-thumb">
                                    <a href="product-details.html">
                                        <img class="pri-img" src="assets/img/product/product-14.jpg" alt="product">
                                        <img class="sec-img" src="assets/img/product/product-8.jpg" alt="product">
                                    </a>
                                    <div class="product-badge">
                                        <div  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="button-group">
                                        <a href="{{route('wishlist.add',$items->id)}}" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>
                                        <a href="#" data-toggle="modal" data-target="#quick_view{{$items->id}}"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>
                                        <a href="{{route('cart.add',$items->id)}}" data-toggle="tooltip" data-placement="left" title="Them vao gio hang"><i class="lnr lnr-cart"></i></a>
                                    </div>
                                </figure>
                                <div class="product-caption">
                                    <p class="product-name">
                                        <a href="product-details.html">{{$items->name}}}</a>
                                    </p>
                                    <div class="price-box">
                                        <span class="price-regular">{{number_format($items->price)}} .VND</span>

                                    </div>
                                </div>
                            </div>
{{--                            @include('store.modalHot')--}}
                            @endforeach
                            <!-- product single item end -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trending product area end -->
{{---------------------------------------------------------------------------------------------end xu huong---------------}}
        <!-- Instagram Feed Area Start -->
        <div class="instagram-feed-area">
            <div class="container">
                <div class="instagram-feed-thumb">
                    <div id="instafeed" class="instagram-carousel" data-userid="6666969077" data-accesstoken="6666969077.1677ed0.d325f406d94c4dfab939137c5c2cc6c2">
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Feed Area End -->

    </main>
    <!-- main wrapper end -->
@stop

   