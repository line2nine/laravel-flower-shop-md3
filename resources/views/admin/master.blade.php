<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/images/favicon.ico')}}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>

    <link href="{{asset('/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>

    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('/css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('/css/sidebar-menu.css')}}" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('/css/app-style.css')}}" rel="stylesheet"/>
    <title>Dashboard</title>
</head>
<body>
<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader -->
<div id="wrapper">
    @include('admin.core.nav')
    @include('admin.core.header')
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    @include('admin.core.footer')
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{asset('/js/popper.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{asset('/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{asset('/js/sidebar-menu.js')}}"></script>
<!-- loader scripts -->
<script src="{{asset('/js/jquery.loading-indicator.html')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('/js/app-script.js')}}"></script>


<script src="{{asset('/plugins/Chart.js/Chart.min.js')}}"></script>
<!-- Vector map JavaScript -->
<script src="{{asset('/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- Easy Pie Chart JS -->
<script src="{{asset('/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<!-- Sparkline JS -->
<script src="{{asset('/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-knob/excanvas.js')}}"></script>
<script src="{{asset('/plugins/jquery-knob/jquery.knob.js')}}"></script>
<script>
    $(function () {
        $(".knob").knob();
    });
</script>

<!-- Index js -->
<!-- <script src="/js/index.js"></script> -->
<script src="{{asset('js/index.js')}}"></script>
</body>
</html>
