
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
                                <h1>cart</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-space pb-0">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">
                                            <th>STT</th>
                                            <th class="pro-thumbnail">Hình ảnh</th>
                                            <th class="pro-title">Sản phẩm</th>
                                            <th class="pro-price">Giá</th>
                                            <th class="pro-quantity">Số lượng</th>
                                            <th class="pro-subtotal">Thành tiền</th>
                                            <th class="pro-remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($cart->items) == 0)
                                            <tr><td colspan="10" class="text-danger">Không có dữ liệu</td></tr>
                                        @else
                                            <?php $s = 1 ?>
                                            @foreach($cart->items as $key => $cartOne)
                                        <tr>
                                            <td>{{$s++}}</td>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/product-1.jpg" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#">{{$cartOne['name']}}</a></td>
                                            <td class="pro-price"><span>{{number_format($cartOne['price'])}}</span></td>
                                            <td class="pro-quantity">
{{--                                                    <div class="pro-qty"><input type="text" value="{{$cartOne['quantity']}}"></div>--}}
                                                    <input type="number" data-id="{{$cartOne['id']}}" name="quantity" min="1" value="{{$cartOne['quantity']}}">
                                            </td>
                                            <td class="pro-subtotal"><span>{{number_format($cartOne['price'] * $cartOne['quantity'])}} VND</span></td>
                                            <td class="pro-remove"><a href="{{route('cart.remove',['id' => $cartOne['id']] )}}" ><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ml-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h3>Tổng số giỏ hàng</h3>
                                    <div class="table-responsive">


                                        <table class="table">

                                            <tr>
                                                <td>Shipping</td>
                                                <td>0 VND</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Tong tien</td>
                                                <td class="total-amount">{{number_format($cart->total_price)}} VND</td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                                @if(!\Illuminate\Support\Facades\Auth::check())
                                <a href="{{route('login')}}" class="btn btn__bg d-block"  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">Đăng nhập để mua hàng</a>
                                @else
                                <a href="{{route('checkout')}}" class="btn btn__bg d-block"  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">CheckOut</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
    <!-- main wrapper end -->

 @stop
