<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cart\Cart;
use App\Product;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{

    public function add(Cart $cart, $id)
    {
        $products = Product::find($id);
        $cart->add($products);
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => $cart->get_total_quantity(),
                'totalPrice' => $cart->get_total_price(),
                'listItem' => $cart->items
            ]);
    }

    public function remove(Cart $cart, $id)
    {

        $cart->remove($id);
        return response()->json(
            [
                'status' => 'success',
                'totalItem' => $cart->get_total_quantity(),
                'totalPrice' => $cart->get_total_price(),
                'listItem' => $cart->items
            ]);
    }

    public function update(Cart $cart, $id)
    {
        $quantity = request()->quantity;
        if ($quantity > 0) {
            $cart->update($id, $quantity);
        } else {
            $quantity = 1;
        }

        return response()->json(
            [
                'status' => 'success',
                'totalItem' => $cart->get_total_quantity(),
                'totalPrice' => $cart->get_total_price(),
                'listItem' => $cart->items
            ]);
    }

    public function clear(Cart $cart)
    {
        $cart->clear();
        return redirect()->back();
    }

    public function view()
    {
        return view('store.cart');

    }
}
