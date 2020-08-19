<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login-admin.css')}}">
{{--    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>--}}

{{--    <!-- TODO: Add SDKs for Firebase products that you want to use--}}
{{--         https://firebase.google.com/docs/web/setup#available-libraries -->--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>--}}

{{--    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js"></script>--}}
{{--    <link rel="manifest" href="{{asset('manifest.json')}}">--}}
    <title>Login</title>
</head>
<body>
<form action="{{route('admin.login')}}" method="post">
    @csrf
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Login</h2>
            <input type="email" name="username" placeholder="Email" required/>
            @if($errors->first('username'))
                <p style="color: red"><sub>*{{$errors->first('username')}}</sub></p>
            @endif
            <input type="password" name="password" placeholder="Password" required/>
            @if($errors->first('password'))
                <p style="color: red"><sub>*{{$errors->first('password')}}</sub></p>
            @endif
            <input type="hidden" name="device_token" id="device_token">
            <button type="submit">GO</button>
            <p style="color: blue"><a href="{{route('mail.show')}}">Forgot Password?</a></p>
            <h2>&nbsp;</h2>
        </div>
    </div>
</form>
{{--<script src="{{asset('js/firebase.js')}}"></script>--}}
</body>
</html>
