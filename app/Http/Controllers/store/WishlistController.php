<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart\wishlist;

class WishlistController extends Controller
{
   public function add(wishlist $wishlist, $id){

        $product = Product::find($id);

        $wishlist->add($product);

        return redirect()->back();
   }
    public function remove(wishlist $wishlist, $id){
        $wishlist->remove($id);
        return redirect()->back();
    }
}
