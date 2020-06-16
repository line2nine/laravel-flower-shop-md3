<div class="modal" id="quick_view{{$value->id}}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="product-large-slider">
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img1.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img2.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img3.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="assets/img/product/product-details-img4.jpg" alt="product-details"/>
                                </div>
                            </div>
                            <div class="pro-nav slick-row-10 slick-arrow-style">
                                <div class="pro-nav-thumb">
                                    <img src="assets/img/product/product-details-img1.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="assets/img/product/product-details-img2.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="assets/img/product/product-details-img3.jpg" alt="product-details"/>
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="assets/img/product/product-details-img4.jpg" alt="product-details"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="product-details-des quick-details">
                                <h3 class="product-name">{{$value->name}}</h3>
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
                                    <span class="price-regular">{{number_format($value->price)}}.VND</span>
{{--                                    <span class="price-old"><del>$90.00</del></span>--}}
                                </div>
                                <h5 class="offer-text"><strong>Nhanh lên</strong>! đề nghị kết thúc vào:</h5>
                                <div class="product-countdown" data-countdown="2020/04/25"></div>
                                <div class="availability">
                                    <i class="fa fa-check-circle"></i>
                                    <span>200 in stock</span>
                                </div>
                                <p class="pro-desc">{{$value->description}}</p>
                                <div class="quantity-cart-box d-flex align-items-center">
{{--                                    <h5>qty:</h5>--}}
{{--                                    <div class="quantity">--}}
{{--                                        <div class="pro-qty"><input type="text" value="1"></div>--}}
{{--                                    </div>--}}
                                    <div class="action_link">
                                        <a style="background: rgb(131,58,180);background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(252,176,69,0.9248074229691877) 100%);" class="btn btn-cart2" href="{{route('cart.add',$value->id)}}">Thêm vào giõ hàng</a>
                                    </div>
                                </div>
                                <div class="useful-links">
{{--                                    <a href="#" data-toggle="tooltip" title="Compare"><i--}}
{{--                                                class="lnr lnr-sync"></i>compare</a>--}}
                                    <a href="{{route('wishlist.add', $value->id)}}" data-toggle="tooltip" title="Wishlist"><i
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
                </div> <!-- product details inner end -->
            </div>
        </div>
    </div>
</div>