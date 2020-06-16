<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(ProductService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        $top_product = Product::limit(6)->orderBy('id','DESC')->get();
        $hot_product = Product::limit(12)->orderBy('id','DESC')->get();
        return view('index',compact('top_product','hot_product'));

    }
    public function search(Request $request){
        $productSearch = Product::limit(12)->where('name', 'like','%'.$request->key.'%')->get();
//       dd($productSearch);
        return view('store.search', compact('productSearch'));
    }


}
