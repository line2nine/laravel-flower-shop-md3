<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login-admin.css')}}">
    <title>Login</title>
</head>
<body>
<form action="{{route('admin.login')}}" method="post">
    @csrf
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Please Sign In</h2>
            <input type="email" name="username" placeholder="Email"/>
            @if($errors->first('username'))
                <p class="text-danger"><sub>*{{$errors->first('username')}}</sub></p>
            @endif
            <input type="password" name="password" placeholder="Password"/>
            @if($errors->first('password'))
                <p class="text-danger"><sub>*{{$errors->first('password')}}</sub></p>
            @endif
            <button type="submit">Login</button>
            <h2>&nbsp;</h2>
        </div>
    </div>
</form>
</body>
</html>
