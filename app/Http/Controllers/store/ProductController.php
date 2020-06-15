<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    protected $homeService;

    public function __construct(ProductService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function shop(Request $request)
    {
        $products = $this->homeService->getAllShop();
        $category = Category::first();
        $categories = Category::all();
        if ($request->price)
        {
            $price = $request->price;
            switch ($price)
            {
                case '1':
                    $products = Product::where('price','<',1000000)->paginate(12);
                    $message = "Không tìm thấy sản phẩm nào";
                    session()->flash('filter-error', $message);
                    break;
                case '2':
                    $products = Product::whereBetween('price',[1000000,3000000])->paginate(12);
                    break;
                case '3':
                    $products = Product::whereBetween('price',[3000000,5000000])->paginate(12);
                    break;
                case '4':
                    $products = Product::where('price','>',5000000)->paginate(12);
                    break;
            }
        }
        if ($request->orderby){
            $sort = $request->orderby;
            switch ($sort)
            {
                case 'asc':
                    $products = Product::orderBy('id','desc')->paginate(12);
                    break;
                case 'price_max':
                    $products = Product::orderBy('price','asc')->paginate(12);
                    break;
                case 'price_min':
                    $products = Product::orderBy('price','DESC')->paginate(12);
                    break;
            }
        }
        return view('store.shop', compact('products','category','categories'));
    }

    public function details($id)
    {
        $productDetails = $this->homeService->find($id);
        return view('store.product-details', compact('productDetails'));
    }


}
