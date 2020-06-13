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
                                <h1>blog</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper section-space pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-item-wrapper">
                            <div class="row mbn-30">


                                <!-- blog single item start -->
                                @foreach($blogs as $blog)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post-item mb-30">
                                        <div class="blog-post-thumb">
                                            <div class="blog-carousel-active slick-arrow-style">
                                                <div class="blog-single-slide">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/blog-details-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-single-slide">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/blog-details-4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-single-slide">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/blog-details-1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="blog-single-slide">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/blog-details-2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-date">
                                                <p class="date">10</p>
                                                <p class="month">May</p>
                                            </div>
                                        </div>
                                        <div class="post-info-wrapper">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-details.html">{{$blog->name}}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="post-author">
                                                        Written by: <a href="#">Admin</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-summary">
                                                <p>{{$blog->title}}
                                                </p>
                                            </div>
                                            <a href="blog-details.html" class="btn-read">đọc thêm......</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- blog single item end -->
                                @endforeach


                                <!-- blog single item start -->
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post-item mb-30">
                                        <div class="blog-post-thumb embed-responsive embed-responsive-16by9">
                                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/501298839&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                            <div class="post-date">
                                                <p class="date">05</p>
                                                <p class="month">Jan</p>
                                            </div>
                                        </div>
                                        <div class="post-info-wrapper">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-details.html">Jasmine flowers white</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="post-author">
                                                        Written by: <a href="#">Admin</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-summary">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                                    posuere libero eu augue.
                                                </p>
                                            </div>
                                            <a href="blog-details.html" class="btn-read">read more...</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- blog single item end -->

                                <!-- blog single item start -->
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="blog-post-item mb-30">
                                        <div class="blog-post-thumb embed-responsive embed-responsive-16by9">
                                            <iframe src="https://www.youtube.com/embed/4qNHr0W6F0o" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            <div class="post-date">
                                                <p class="date">12</p>
                                                <p class="month">Dec</p>
                                            </div>
                                        </div>
                                        <div class="post-info-wrapper">
                                            <div class="entry-header">
                                                <h2 class="entry-title">
                                                    <a href="blog-details.html">Orchid flower red stick</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <div class="post-author">
                                                        Written by: <a href="#">Admin</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="entry-summary">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean
                                                    posuere libero eu augue.
                                                </p>
                                            </div>
                                            <a href="blog-details.html" class="btn-read">read more...</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- blog single item end -->

                            </div>
                            <!-- start pagination area -->
{{--                            <div class="paginatoin-area text-center">--}}
{{--                                <ul class="pagination-box">--}}

{{--                                    {!! $blogs->links() !!}--}}

{{--                                </ul>--}}
{{--                            </div>--}}
                            <!-- end pagination area -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
    <!-- main wrapper end -->
@stop