<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $homeService;

    public function __construct(ProductService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function shop()
    {
        $products = $this->homeService->getAllShop();
        return view('store.shop', compact('products'));
    }

    public function details($id)
    {

        $productDetails = $this->homeService->find($id);

        return view('store.product-details', compact('productDetails'));
    }

}
