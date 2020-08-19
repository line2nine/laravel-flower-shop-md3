<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use App\Notification;

class OrderController extends Controller
{
    public function getOder(){

        $orders = Order::paginate(10);
        return view('orders.list',compact('orders'));
    }

    public function orderDetail($id){

        $orders = Order::find($id);
        $orderDetails = OrderDetail::where('order_id',$id)->get();
        return view('orders.orderDetail',compact('orders','orderDetails'));
    }

    public function updateStatus(Request $request,$id){
        $update =  Order::find($id);
        $update->status = $request->status;
        $update->save();
        return redirect()->back();
    }

    public function order($order_id)
    {
        $orders = Order::find($order_id);
        $orderDetails = OrderDetail::where('order_id',$order_id)->get();
        if (Notification::where('order_id', $order_id)->update(['read_at' => date('Y-m-d H:i:s')])) {
            return view('orders.orderDetail',compact('orders','orderDetails'));
        }
    }

    public function readOrder(Request $request)
    {
        if ($request->ajax()) {
            $noti = Notification::read();
            return view('orders.read', compact('noti'));
        }
    }
}
