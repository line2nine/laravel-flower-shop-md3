<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>
<body>
<form method="post" action="{{route('mail.send')}}">
    @csrf
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <p>{{\Illuminate\Support\Facades\Session::get('success')}}</p>
    @endif
    <label>Enter your email</label>
    <input type="email" name="email" placeholder="email">
    <button type="submit"> Send </button>
</form>

</body>
</html>
