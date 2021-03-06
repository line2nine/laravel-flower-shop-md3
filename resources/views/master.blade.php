<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title> Flower</title>

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon"/>

    <!-- Google fonts include -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,900%7CYesteryear"
          rel="stylesheet">

    <!-- All Vendor & plugins CSS include -->
    <link href="{{asset('assets/css/vendor.css')}}" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet">
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="{{asset('js/toastr.js')}}"></script>
    @notify_css
    @notify_js

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @include('sweetalert::alert')
</head>
<body>

<!-- Start Header Area -->
<header class="header-area">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <div class="header-top bdr-bottom">
            <div class="container">
                <div class="row align-items-center">
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="welcome-message">--}}
{{--                            <p>Chào mừng bạn đến với cửa hàng trực tuyến Floda</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6 text-right">--}}
{{--                        <div class="header-top-settings">--}}
{{--                            <ul class="nav align-items-center justify-content-end">--}}
{{--                                <li class="language">--}}
{{--                                    <span>Language:</span>--}}
{{--                                    <img src="assets/img/icon/en.png" alt="flag"> English--}}
{{--                                    <i class="fa fa-angle-down"></i>--}}
{{--                                    <ul class="dropdown-list">--}}
{{--                                        <li><a href="#"><img src="{{asset('assets/img/icon/en.png')}}" alt="flag">--}}
{{--                                                english</a></li>--}}
{{--                                        <li><a href="#"><img src="{{asset('assets/img/icon/fr.png')}}" alt="flag">--}}
{{--                                                vietnam</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{route('index')}}">
                                <img src="{{asset('assets/img/logo/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-4 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>

                                        <li class="active"><a href="{{route('index')}}">Trang chủ</a>

                                        </li>
                                        <li class="static"><a href="#">Danh mục <i class="fa fa-angle-down"></i></a>
                                            <ul class="megamenu dropdown">
                                                @foreach($categories as $category)
                                                    <li>
                                                        <ul>
                                                            <li><a href="shop.html">{{$category->name}}</a></li>

                                                        </ul>
                                                    </li>
                                                @endforeach
                                                <li class="megamenu-banners d-none d-lg-block">
                                                    <a href="product-details.html">
                                                        <img src="assets/img/banner/img-bottom-menu.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('product.shop')}}">Shop<i></i></a>
                                        </li>
                                        <li><a href="{{route('blog')}}">Blog </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->
                    <div class="col-lg-2" style="padding: 0px ; margin-left: 90px; margin-top: 30px;position: relative ">
                        <form action="{{route('search')}}">
                            <div class="" >
                                <input class="form-control input-sm" type="text" placeholder="search" required name="key" />
                                <span><button type="submit"></button></span>
                            </div>
                        </form>
                    </div>
                    <!-- mini cart area start -->

                    <div class="col-lg-2" style="padding: 0px">
                        <div class="header-configure-wrapper">
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">

                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="lnr lnr-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <li>
                                                @if(!\Illuminate\Support\Facades\Auth::check())
                                                    <a href="{{route('login')}}">Đăng nhập</a>
                                                    <a href="{{route('register')}}">Đăng ký</a>
                                                @else
                                                    <a href="{{route('account')}}">{{\Illuminate\Support\Facades\Auth::user()->email}}</a>
                                                    <a href="{{route('logout')}}">Đăng xuất</a>
                                                @endif

                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('wishlist')}}">
                                            <i class="lnr lnr-heart"></i>

                                            <div class="notification">{{count($wishlist->items)}}</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="minicart-btn">
                                            <i class="lnr lnr-cart"></i>
                                            <div class="notification">{{$cart->total_quantity}}</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->



                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>
    <!-- main header start -->

    <!-- mobile header start -->
    <div class="mobile-header d-lg-none d-md-block sticky">
        <!--mobile header top start -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="mobile-main-header">
                        <div class="mobile-logo">
                            <a href="index.html">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                        <div class="mobile-menu-toggler">
                            <div class="mini-cart-wrap">
                                <a href="cart.html">
                                    <i class="lnr lnr-cart"></i>
                                </a>
                            </div>
                            <div class="mobile-menu-btn">
                                <div class="off-canvas-btn">
                                    <i class="lnr lnr-menu"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile header top start -->
    </div>
    <!-- mobile header end -->
</header>
<!-- end Header Area -->

<!-- off-canvas menu start -->
<aside class="off-canvas-wrapper">
    <div class="off-canvas-overlay"></div>
    <div class="off-canvas-inner-content">
        <div class="btn-close-off-canvas">
            <i class="lnr lnr-cross"></i>
        </div>

        <div class="off-canvas-inner">
            <!-- search box start -->
            <div class="search-box-offcanvas">
                <form>
                    <input type="text" placeholder="Search Here...">
                    <button class="search-btn"><i class="lnr lnr-magnifier"></i></button>
                </form>
            </div>
            <!-- search box end -->

            <!-- mobile menu start -->
            <div class="mobile-navigation">

                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home version 01</a></li>
                                <li><a href="index-2.html">Home version 02</a></li>
                                <li><a href="index-3.html">Home version 03</a></li>
                                <li><a href="index-4.html">Home version 04</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">pages</a>
                            <ul class="megamenu dropdown">
                                <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">shop grid left
                                                sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="product-details-affiliate.html">product
                                                details
                                                affiliate</a></li>
                                        <li><a href="product-details-variable.html">product details
                                                variable</a></li>
                                        <li><a href="product-details-group.html">product details
                                                group</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">column 03</a>
                                    <ul class="dropdown">
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="mega-title menu-item-has-children"><a href="#">column 04</a>
                                    <ul class="dropdown">
                                        <li><a href="my-account.html">my-account</a></li>
                                        <li><a href="login-register.html">login-register</a></li>
                                        <li><a href="contact-us.html">contact us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">shop</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">shop grid left sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a></li>
                                        <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                        <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a></li>
                                        <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">products details</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="product-details-affiliate.html">product details affiliate</a></li>
                                        <li><a href="product-details-variable.html">product details variable</a></li>
                                        <li><a href="product-details-group.html">product details group</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="#">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                <li><a href="blog-grid-full-width.html">blog grid no sidebar</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                                <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->

            <div class="mobile-settings">
                <ul class="nav">
                    <li>
                        <div class="dropdown mobile-top-dropdown">
                            <a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Currency
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="currency">
                                <a class="dropdown-item" href="#">$ USD</a>
                                <a class="dropdown-item" href="#">$ EURO</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown mobile-top-dropdown">
                            <a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                My Account
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="myaccount">
                                <a class="dropdown-item" href="my-account.html">my account</a>
                                <a class="dropdown-item" href="login-register.html"> login</a>
                                <a class="dropdown-item" href="login-register.html">register</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- offcanvas widget area start -->
            <div class="offcanvas-widget-area">
                <div class="off-canvas-contact-widget">
                    <ul>
                        <li><i class="fa fa-mobile"></i>
                            <a href="#">0123456789</a>
                        </li>
                        <li><i class="fa fa-envelope-o"></i>
                            <a href="#">folida@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="off-canvas-social-widget">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
            <!-- offcanvas widget area end -->
        </div>
    </div>
</aside>
<!-- off-canvas menu end -->
@yield('main')

<!-- Start Footer Area Wrapper -->
<footer class="footer-wrapper">

    <!-- footer widget area start -->
    <div  class="footer-widget-area">
        <div class="container">
            <div class="footer-widget-inner section-space">
                <div class="row mbn-30">
                    <!-- footer widget item start -->
                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="footer-widget-item mb-30">
                            <div class="footer-widget-title">
                                <h5>Liên hệ</h5>
                            </div>
                            <ul class="footer-widget-body accout-widget">
                                <li class="address">
                                    <em><i class="lnr lnr-map-marker"></i></em>
                                    15 TT04, Mon city.
                                </li>
                                <li class="email">
                                    <em><i class="lnr lnr-envelope"></i>Mail us: </em>
                                    <a href="mailto:test@yourdomain.com">foloda@gmail.com</a>
                                </li>
                                <li class="phone">
                                    <em><i class="lnr lnr-phone-handset"></i> Phones: </em>
                                    <a href="tel:(012)800456789-987">(+84) 012345678</a>
                                </li>
                            </ul>
                            <div class="payment-method">
                                <img src="assets/img/payment-pic.png" alt="payment method">
                            </div>
                        </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div class="col-lg-2 col-md-6 col-sm-4">
                        <div class="footer-widget-item mb-30">
                            <div class="footer-widget-title">
                                <h5>categories</h5>
                            </div>
                            <ul class="footer-widget-body">
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">shopify</a></li>
                                <li><a href="#">Prestashop</a></li>
                                <li><a href="#">Opencart</a></li>
                                <li><a href="#">Magento</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer widget item end -->

                    <!-- footer widget item start -->
                    <div  class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget-item mb-30">
                            <div class="footer-widget-title">
                                <h5>information</h5>
                            </div>
                            <ul class="footer-widget-body">
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="{{route('product.shop')}}">Shop</a></li>
                                <li><a href="{{route('blog')}}">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- footer widget area end -->

    <!-- footer bottom area start -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copyright-text">
                        <p>Copyright ©All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="footer-social-link">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom area end -->

</footer>
<!-- End Footer Area Wrapper -->

<!-- Quick view modal start -->

<!-- Quick view modal end -->

<!-- offcanvas search form start -->
<div class="offcanvas-search-wrapper">
    <div class="offcanvas-search-inner">
        <div class="offcanvas-close">
            <i class="lnr lnr-cross"></i>
        </div>
        <div class="container">
            <div class="offcanvas-search-box">
                <form class="d-flex bdr-bottom w-100">
                    <input type="text" placeholder="Search entire storage here...">
                    <button class="search-btn"><i class="lnr lnr-magnifier"></i>search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas search form end -->
<div class="offcanvas-minicart-wrapper">
    <div class="minicart-inner">
        <div class="offcanvas-overlay"></div>
        <div class="minicart-inner-content">
            <div class="minicart-close">
                <i class="lnr lnr-cross"></i>
            </div>
            <div class="minicart-content-box">
                <div class="minicart-item-wrapper">
                    <ul>
                        @if(count($cart->items) == 0)
                            <a colspan="10" class="text-danger">Không có dữ liệu</a>
                        @else
                            <?php $s = 1 ?>
                            @foreach($cart->items as $key => $cartOne)
                                <li class="minicart-item">
                                    <div class="minicart-thumb">
                                        <a href="product-details.html">
                                            <img src="assets/img/cart/cart-1.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="minicart-content">
                                        <h3 class="product-name">
                                            <a href="product-details.html">{{$cartOne['name']}}</a>
                                        </h3>
                                        <p>
                                            <span class="cart-quantity">{{$cartOne['quantity']}}<strong>&times;</strong></span>
                                            <span class="cart-price">{{number_format($cartOne['price'])}} VND</span>
                                        </p>
                                    </div>
                                    <a href="{{route('cart.remove', $cartOne['id'])}}" class="minicart-remove"><i class="lnr lnr-cross"></i></a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="minicart-pricing-box">
                    <ul>

                        <li class="total">
                            <span>total</span>
                            <span><strong>{{number_format($cart->total_price)}} VND</strong></span>
                        </li>
                    </ul>
                </div>

                <div class="minicart-button">
                    <a href="{{route('cart.view')}}" style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" ><i class="fa fa-shopping-cart"></i>Xem giõ hàng</a>
                    {{--                    <a href="{{route('checkout')}}"><i class="fa fa-share"></i> checkout</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- offcanvas mini cart end -->
<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->
@notify_render
<!-- All vendor & plugins & active js include here -->
<!--All Vendor Js -->
<script>
    $(function () {
        $('#orderby').change(function () {
            $("#form_order").submit();
        })

    })
</script>
<script src="{{asset('assets/js/vendor.js')}}"></script>
<!-- Active Js -->
<script src="{{asset('assets/js/active.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5ee6fde59e5f694422908eca/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
{{--<script>--}}
{{--    Swal.fire(--}}
{{--        'Good job!',--}}
{{--        'You clicked the button!',--}}
{{--        'success'--}}
{{--    )--}}
{{--</script>--}}
<!-- Tùy chọn: bao gồm một polyfill cho ES6 Promising cho trình duyệt IE11 và Android -->

{{--<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>--}}
</body>
</html>
