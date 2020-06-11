<?php


namespace App\Http\Repositories;


use App\Order;
use App\OrderDetail;

class OrderRepository
{
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getAll()
    {
        return $this->order->all();
    }

    public function find($id)
    {
        return $this->order->findOrFail($id);
    }

    public function save($order)
    {
        $order->save();
    }

    public function search($keyword)
    {
        return $this->order->where('name', 'LIKE', '%' . $keyword . '%')->get();
    }
}
