<?php


namespace App\Cart;


class wishlist
{

    public $items = [];
    public function __construct()
    {
        $this->items = session('wishlist')? session('wishlist'): [];

    }

    public function add($products){
        $items = [
            'id' => $products->id,
            'name' => $products->name,
            'price' => $products->price,
            'image' => $products->image,
        ];
        session(['wishlist'=>$this->items]);
    }

    public function remove($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['wishlist'=>$this->items]);
    }
}