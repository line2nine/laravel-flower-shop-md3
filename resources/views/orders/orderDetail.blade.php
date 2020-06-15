@extends('admin.master')
@section('content')
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">Oder Detail</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('order.list')}}">Detail</a></li>
                <li class="breadcrumb-item active" aria-current="page">Oder Detail</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin về khách hàng</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>

                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Tên khách hàng:</th>
                                <td>{{$orders->name}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Địa chỉ khách hàng:</th>
                                <td>{{$orders->address}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Số điện thoại liên hệ:</th>
                                <td>{{$orders->phone}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Ghi chú:</th>
                                <td>{{$orders->order_note}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Thông tin về đơn hàng </h5>
                    <div class="table-responsive">

                            <form action="{{route('update.status',$orders->id)}}" method="post" >
                                @csrf
                                <div class="row">
                            <div class="col-md-4">
                                    @if(($orders->status)==2)
                                        <select name="status" id="inputStatus" class="form-control" required="required">
                                            <option value="2" {{(($orders->status)==2)?'selected':''}}>Đơn hàng hoàn thành</option>
                                        </select>
                                    @elseif(($orders->status)==3)
                                        <select name="status" id="inputStatus" class="form-control" required="required">
                                            <option value="3" {{(($orders->status)==3)?'selected':''}}>Đơn hàng bị hủy</option>
                                        </select>
                                    @else
                                        <select name="status" id="inputStatus" class="form-control" required="required">
                                            <option value="1" {{(($orders->status)==1)?'selected':''}}>Đang giao hàng</option>
                                            <option value="0" {{(($orders->status)==0)?'selected':''}}>Đang Xử Lý</option>

                                            <option value="2" {{(($orders->status)==2)?'selected':''}}>Đơn hàng hoàn thành</option>
                                            <option value="3" {{(($orders->status)==3)?'selected':''}}>Đơn hàng bị hủy</option>
                                        </select>
                                    @endif
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary">Cập nhật trạng thái</button>
                            </div>
                                </div>
                            </form>
                        <br>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <span class="label-col-sp">Ngày tạo đơn hàng:</span>
                                </td>
                                <td> <span class="content-col-sp">{{$orders->created_at}}</span></td>

                            </tr>
                            <tr>
                                <td>Trạng thái hiện tại:</td>
                                <td> @if($orders->status==0)
                                        <span class="content-col-sp"><a class="text-danger">Chưa giao hàng</a></span>
                                    @elseif($orders->status==1)
                                        <span class="content-col-sp"><a class="text-info">Đang giao hàng</a></span>
                                    @elseif($orders->status==2)
                                        <span class="content-col-sp"><a class="text-success">Đơn hàng hoàn thành</a></span>
                                    @else
                                        <span class="content-col-sp"><a class="text-danger">Đơn hàng bị hủy</a></span>
                                    @endif</td>
                            </tr>
                            <tr>
                                <td>Tổng tiền:</td>
                                <td>{{number_format($orders->total_price)}} VNĐ</td>
                            </tr>
                            <tr>
                                <td>Hình thức thanh toán:</td>
                                <td> @if($orders->payment=="ATM")
                                        <span class="content-col-sp">Chuyển khoản ({{$orders->payment}})</span>
                                    @elseif($orders->payment=="COD")
                                        <span class="content-col-sp">Thanh toán khi giao ({{$orders->payment}})</span>
                                    @endif</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Ảnh sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá bán</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            {{dd($orderDetails->all())}}--}}
                            @foreach($orderDetails as $key => $detail)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$detail->product->name}}</td>
                                <td><img class="avatar" src="{{asset('storage/' .$detail->product->image)}}"></td>
                                <td>{{$detail->quantity}}</td>
                                <td>{{$detail->price}}. VND</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div><!--End Row-->
@endsection