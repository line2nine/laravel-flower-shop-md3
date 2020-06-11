

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
                                <h1>wishlist</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">wishlist</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- wishlist main wrapper start -->
        <div class="wishlist-main-wrapper section-space pb-0">
            <div class="container">
                <!-- Wishlist Page Content Start -->
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Wishlist Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered " >
                                    <thead>
                                        <tr style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
{{--                                            <th class="pro-quantity">Stock UserStatus</th>--}}
                                            <th class="pro-subtotal">Add to Cart</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @if(count($wishlist->items) == 0)
                                        <tr><td colspan="10" class="text-danger">Không có dữ liệu</td></tr>
                                    @else
                                        <?php $s = 1 ?>
                                        @foreach($wishlist->items as $key => $MyWishlist)
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-5.jpg" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#">{{$MyWishlist['name']}}</a></td>
                                            <td class="pro-price"><span>{{number_format($MyWishlist['price'])}}.VND</span></td>
{{--                                            <td class="pro-quantity"><span class="text-success">{{$MyWishlist['status']}}</span></td>--}}
                                            <td class="pro-subtotal"><a style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" href="{{route('cart.add',$MyWishlist['id'])}}" class="btn btn__bg">Thêm vào giõ hàng</a></td>
                                            <td class="pro-remove"><a  href="{{route('wishlist.remove',$MyWishlist['id'])}}"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Wishlist Page Content End -->
            </div>
        </div>
        <!-- wishlist main wrapper end -->
    </main>
    <!-- main wrapper end -->
@stop
