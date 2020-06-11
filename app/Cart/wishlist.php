<?php


namespace App\Cart;
use Illuminate\Support\Facades\Auth;

class wishlist
{

    public $items = [];
    public function __construct()
    {
        $this->items = session('wi')? session('wi'): [];

    }

    public function add($products){
        if (Auth::check()){
            $item = [
                'id' => $products->id,
                'name' => $products->name,
                'price' => $products->price,
                'image' => $products->image,
            ];
            $this->items[$products->id] = $item;
            session(['wi'=>$this->items]);
            $a = ['wi'=>$this->items];
        } else {
            $message = "ban chua dang nhap";
            session()->flash('chuanhap-error',$message);
            return view('index');
        }


    }

    public function remove($id){

        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['wi'=>$this->items]);
    }
}