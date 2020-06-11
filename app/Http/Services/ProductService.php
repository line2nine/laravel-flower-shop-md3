<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepository;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->productRepo->getAll();
    }
    public function getAllNew()
    {
        return $this->productRepo->getAll();
    }
    public function getAllShop()
    {
        return $this->productRepo->getAllShop();
    }

    public function find($id)
    {
        return $this->productRepo->find($id);
    }

    public function create($request)
    {
        $productRepo = new Product();
        $productRepo->name = $request->name;
        $productRepo->price = $request->price;
        if ($request->hasFile('image')) {
            $productRepo->image = $request->image->store('images', 'public');
        } else {
            $productRepo->image = 'images/default-product.jpg';
        }
        $productRepo->category_id = $request->category;
        $productRepo->description = $request->description;

        $this->productRepo->save($productRepo);

    }

    public function update($productRepo, $request)
    {
        $productRepo->name = $request->name;
        $productRepo->price = $request->price;
        $oldFilePath = $productRepo->image;
        if ($request->hasFile('image')) {
            Storage::delete("public/" . $oldFilePath);
            $productRepo->image = $request->image->store('images', 'public');
        }

        $productRepo->category_id = $request->category;
        $productRepo->description = $request->description;

        $this->productRepo->save($productRepo);
    }

    public function searchByKeyword($request)
    {
        $keyword = $request->keyword;
        if ($keyword){
            return $this->productRepo->searchProduct($keyword);
        }
        return false;
    }
}
