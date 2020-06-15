
@extends('../master')
@section('main')





<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area common-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h1>shop</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-space pb-0">
        <div class="container">
            <div class="row">
                <!-- shop main wrapper start -->
                <div class="col-lg-12">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <!-- shop product top wrap start -->

                        <!-- product item list wrapper start -->
                        <div class="row mtn-40">
                            <!-- product single item start -->
                          @if($productSearch->count() == 0)
                             <h4 class="text-danger " style="margin-left: 40%">Không có sản phẩm...-> <a class="" href="{{route('index')}}"><i class="fa fa-home" aria-hidden="true"></i></a></h4>
                        @else
                                @foreach($productSearch as $key => $value)
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
                        <!-- product item list wrapper end -->
                        @endif


                        <!-- start pagination area -->
{{--                        <div class="paginatoin-area text-center">--}}
{{--                            <ul class="pagination-box">--}}
{{--                                {!! $productSearch->links() !!}--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <!-- end pagination area -->
                    </div>
                </div>
                <!-- shop main wrapper end -->
            </div>
        </div>
    </div>
    <!-- page main wrapper end -->
</main>
@stop