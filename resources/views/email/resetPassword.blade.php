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
<form action="{{route('pass.reset', $passwordReset->token)}}" method="post">
    @csrf
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Resetting Password</h2>
            <input type="text" name="token" value="" hidden="">
            <input type="password" name="password" placeholder="New Password" required/>

            <input type="password" name="confirmPassword" placeholder="Confirm Password" required/>

            <button type="submit">Submit</button>
            <h2>&nbsp;</h2>
        </div>
    </div>
</form>
</body>
</html>
