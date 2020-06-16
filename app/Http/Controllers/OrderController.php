<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
//    protected $orderService;
//
//    function __construct(OrderService $orderService)
//    {
//        $this->orderService = $orderService;
//    }

//    function getAll()
//    {
//        $orders = $this->orderService->getAll();
//        return view('orders.list', compact('orders'));
//    }


    public function getOder(){

        $orders = Order::paginate(10);
        return view('orders.list',compact('orders'));
    }
    public function orderDetail($id){

        $orders = Order::find($id);
        $orderDetails = OrderDetail::where('order_id',$id)->get();
//        dd($orderDetails);
        return view('orders.orderDetail',compact('orders','orderDetails'));
    }
    public function updateStatus(Request $request,$id){
        $update =  Order::find($id);
        $update->status = $request->status;
        $update->save();
        return redirect()->back();


    }

}
