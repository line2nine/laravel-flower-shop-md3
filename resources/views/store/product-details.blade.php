
@extends('../master')
@section('main')


    {{session('login-success')}}
    {{session('chuanhap-error')}}
    <!-- main wrapper start -->
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area common-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h1>Chi tiết sản phẩm</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-space">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset('assets/img/product/product-details-img1.jpg')}}" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img5.jpg" alt="product-details" />
                                        </div>
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img1.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img5.jpg" alt="product-details" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">



                                        <h3 class="product-name"> {{$productDetails->name}}</h3>
                                        <div class="ratings d-flex">
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <span><i class="lnr lnr-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-regular">{{number_format($productDetails->price)}}.VND</span>
{{--                                            <span class="price-old"><del>$90.00</del></span>--}}
                                        </div>


                                        <h5 class="offer-text"><strong>Nhanh lên</strong>! đề nghị kết thúc vào:</h5>
                                        <div class="product-countdown" data-countdown="2020/07/25"></div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span>200 trong kho</span>
                                        </div>
                                        <p class="pro-desc">{{$productDetails->description}}</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
{{--                                            <h5>qty:</h5>--}}
{{--                                            <div class="quantity">--}}
{{--                                                <div class="pro-qty"><input type="text" value="1"></div>--}}
{{--                                            </div>--}}
                                            <div class="action_link">
                                                <a style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" class="btn btn-cart2" href="{{route('cart.add',$productDetails->id)}}">Thêm vào giõ hàng</a>
                                            </div>
                                        </div>


                                        <div class="useful-links">

                                            <a href="{{route('wishlist.add', $productDetails->id)}}" data-toggle="tooltip" ><i
                                                    class="lnr lnr-heart"></i>Yêu thích</a>
                                        </div>
                                        <div class="like-icon">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->

                        <!-- product details reviews end -->
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- related product area start -->
        <section class="related-products">
            <div class="container">
                <div class="row">
{{--                    <div class="col-12">--}}
{{--                        <div class="section-title text-center">--}}
{{--                            <h2>Sản phẩm liên quan</h2>--}}
{{--                         <p>Cuộc sống muôn sắc m</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-carousel--4 slick-row-15 slick-sm-row-10 slick-arrow-style">

                            <!-- product single item start -->
{{--                           <div class="product-item">--}}
{{--                                <figure class="product-thumb">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img class="pri-img" src="{{asset('assets/img/product/product-5.jpg')}}" alt="product">--}}
{{--                                        <img class="sec-img" src="{{asset('assets/img/product/product-6.jpg')}}" alt="product">--}}
{{--                                    </a>--}}
{{--                                    <div class="product-badge">--}}
{{--                                        <div class="product-label new">--}}
{{--                                            <span>new</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="button-group">--}}
{{--                                        <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to wishlist"><i class="lnr lnr-heart"></i></a>--}}
{{--                                        <a href="#" data-toggle="modal" data-target="#quick_view"><span data-toggle="tooltip" data-placement="left" title="Quick View"><i class="lnr lnr-magnifier"></i></span></a>--}}
{{--                                        <a href="cart.html" data-toggle="tooltip" data-placement="left" title="Add to Cart"><i class="lnr lnr-cart"></i></a>--}}
{{--                                    </div>--}}
{{--                                </figure>--}}
{{--                                <div class="product-caption">--}}
{{--                                    <p class="product-name">--}}
{{--                                        <a href="product-details.html">Blossom bouquet flower</a>--}}
{{--                                    </p>--}}
{{--                                    <div class="price-box">--}}
{{--                                        <span class="price-regular">$50.00</span>--}}
{{--                                        <span class="price-old"><del>$80.00</del></span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <!-- product single item end -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- related product area end -->
    </main>
    <!-- main wrapper end -->

@stop
