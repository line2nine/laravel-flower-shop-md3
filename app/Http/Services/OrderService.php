<?php


namespace App\Http\Services;


use App\Http\Repositories\OrderRepository;

class OrderService
{
    protected $orderRepo;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    public function getAll()
    {
        return $this->orderRepo->getAll();
    }

    public function find($id)
    {
        return $this->orderRepo->find($id);
    }
}
