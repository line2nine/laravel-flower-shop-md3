<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart\wishlist;

class WishlistController extends Controller
{
   public function add(wishlist $wishlist, $id){

        $products = Product::find($id);

        $wishlist->add($products);

        return redirect()->back();
   }
    public function remove(wishlist $wishlist, $id){
        $wishlist->remove($id);
        return redirect()->back();
    }
    public function view(){

        return view('store.wishlist');

    }
}
