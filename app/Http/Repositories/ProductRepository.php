<?php


namespace App\Http\Repositories;


use App\Product;

class ProductRepository
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return $this->product->all();
    }

    public function getProductDetails()
    {
        return $this->product->all();
    }

    public function getAllShop()
    {
        return $this->product->paginate(9);
    }

    public function find($id)
    {
        return $this->product->findOrFail($id);
    }

    public function save($product)
    {
        $product->save();
    }

    public function filter($idCategory)
    {
        return $this->product->where('category_id', '=', $idCategory)->get();
    }

    public function searchProduct($keyword)
    {
        return $this->product->where('name', 'LIKE', '%' . $keyword . '%')->get();
    }
}
