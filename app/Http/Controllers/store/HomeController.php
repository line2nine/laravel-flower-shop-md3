<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Http\Services\ProductService;
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
        $products = $this->homeService->getAll();
        return view('index', compact('products'));
    }


}
