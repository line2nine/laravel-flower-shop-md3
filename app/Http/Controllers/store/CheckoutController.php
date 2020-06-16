<?php

namespace App\Http\Controllers\store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart\Cart;
use App\Order;

use App\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function __construct()
    {
    }

    public function form(){
        return view('store.checkout');
    }


    public function submit_form(Request $request, Cart $cart ){

        $user_id = Auth::id();
        $order_note = $request->input("note");
        $name = $request->input("name");
        $phone = $request->input("phone");
        $address = $request->input("address");
        $paymentmethod = $request->input("paymentmethod");
        $total_price = $request->input("total_price");
        $email = $request->input("email");




        if ($orders = Order::create([
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'user_id' => $user_id,
            'order_note' =>$order_note,
            'paymentmethod' => $paymentmethod,
            'total_price' => $total_price,
            'email' => $email,

        ])) {

            $order_id = $orders->id;
            foreach ($cart-> items as $product_id =>$item){
                $quantity = $item['quantity'];
                $price = $item['price'];
                OrderDetail::create([
                    'order_id' => $order_id ,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                    'price' =>$price
                ]);
            }
            $data = [
                'name' => $request->name,
                'email'=>$request->email,
            ];
            $email = [
                'xuanhoa93thds@gmail.com',
                $data['email']
            ];
            Mail::send('email.viewEmail',$data,function ($mes) use ($data,$email ){
                $mes->from('xuanhoa93thds@gmail.com');
                $mes->to($email,'email.viewEmail')->subject('Cảm ơn quý khách');
            });
            session(['cart' => '']);
//            $message = "dat hang thanh cong";
//            session()->flash('order-success',$message);
            toast('Success', 'success','top-center');
            return redirect()->route('index');

        } else {
            return redirect()->route('checkout')->with('Đặt hàng khong thành công!');
        }
    }

}
