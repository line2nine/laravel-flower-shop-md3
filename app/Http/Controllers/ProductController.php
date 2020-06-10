<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Services\CategoryService;
use App\Http\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;

    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $products = $this->productService->getAll();
        return view('products.list',compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('products.create',compact('categories'));
    }

    public function store(CreateProductRequest $request){
        $this->productService->create($request);
        Session::flash('success','Add Completed');
        return redirect()->route('product.create');
    }
}
