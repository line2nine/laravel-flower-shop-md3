<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $orderService;

    function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    function getAll()
    {
        $orders = $this->orderService->getAll();
        return view('orders.list', compact('orders'));
    }
}
