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
                                <h1>checkout</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">checkout</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper section-space pb-0">
            <div class="container">
                <div class="row">
                </div>
                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Chi tiết thanh toán</h2>
                            <div class="billing-form-wrap">
                                <form action="#" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">Tên người nhận</label>
                                                <input type="text" placeholder="First Name" required  value="{{\Illuminate\Support\Facades\Auth::user()->name}}" name="name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label  class="required">Địa chỉ nhận hàng</label>
                                        <input type="text" name="address" value="{{\Illuminate\Support\Facades\Auth::user()->address}}" placeholder=" Address" required />
                                    </div>
                                    <div class="single-input-item">
                                        <label class="required">Số điện thoại</label>
                                        <input type="number" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}"  placeholder="Phone" required name="phone" />
                                    </div>
                                    <div class="single-input-item">
                                        <label for="ordernote">Ghi chú</label>
                                        <textarea name="note"  cols="30" rows="3" placeholder="Notes "></textarea>
                                    </div>
                                    <button type="submit" class="btn btn__bg"  style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);">Đặt hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Orders Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h2>Tóm tắt đơn hàng của bạn</h2>
                            <div class="order-summary-content">
                                <!-- Orders Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th><strong>Sản phẩm</strong></th>
                                                <th><strong>Tổng</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cart->items as $key => $cartOne)
                                            <tr>
                                                <td><a href="">{{$cartOne['name']}}<strong> ×  <span class="text-danger">{{$cartOne['quantity']}}</span> </strong></a>
                                                </td>
                                                <td>{{number_format($cartOne['price'] * $cartOne['quantity'])}} VND</td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                        <tfoot>
{{--                                            <tr>--}}
{{--                                                <td>Thành tiền</td>--}}
{{--                                                <td>$400</td>--}}
{{--                                            </tr>--}}
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="d-flex justify-content-center">
                                                    <ul class="shipping-type">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="flatrate" name="shipping" class="custom-control-input"  />
                                                                <label class="custom-control-label" for="flatrate">Flat
                                                                    Rate: {{number_format('30000')}} VND</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="freeshipping" name="shipping" class="custom-control-input" checked/>
                                                                <label class="custom-control-label" for="freeshipping">Free
                                                                    Shipping</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tổng tiền</td>
                                                <td>{{number_format($cart->total_price)}} VND</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Orders Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked />
                                                <label class="custom-control-label" for="cashon">Thanh toán khi giao hàng</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Thanh toán bằng tiền mặt khi giao hàng.</p>
                                        </div>
                                    </div>
                                    <div class="single-payment-method">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                <label class="custom-control-label" for="directbank">Chuyển khoản qua ngân hàng</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="bank">
                                            <p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Đơn hàng của bạn
                                                ID là tài liệu tham khảo thanh toán. Đơn hàng của bạn sẽ không được chuyển đi cho đến khi
                                                tiền đã bị xóa trong tài khoản của chúng tôi ..</p>
                                            <br>
                                            <h5 class="text-danger">Chủ tài khoản: <span>LE VAN A</span> </h5>
                                            <h5 class="text-danger">Số tài khoản: <span>26587954202155</span> </h5>
                                            <h5 class="text-danger">Ngân hàng BIDV chi nhánh Hoàn Kiếm </h5>
                                        </div>
                                    </div>

                                    <div class="summary-footer-area">
                                        <div class="custom-control custom-checkbox mb-20">
                                            <input type="checkbox" class="custom-control-input" id="terms" required />
                                            <label class="custom-control-label" for="terms">Tôi đã đọc và đồng ý <a href="index.html">các điều khoản và điều kiện.</a></label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout main wrapper end -->
    </main>
    <!-- main wrapper end -->
@stop