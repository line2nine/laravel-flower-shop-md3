<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3>Quý khách nhận được mail này vì đã đặt hàng thành công trên hệ thống của Floda</h3>
<br>
<p>Đơn hàng của quý khác được xác nhận như sau:</p>
<table style="border: 1px black solid">
    <thead>
    <tr>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Giá</th>
    </tr>
    </thead>
   <tbody>
   @foreach($cart->items as $carts)
   <tr>
       <td>{{$carts['name']}}</td>
       <td>{{$carts['quantity']}}</td>
       <td>{{$carts['price']}}</td>
   </tr>
   @endforeach
   </tbody>
</table>
</body>
</html>
