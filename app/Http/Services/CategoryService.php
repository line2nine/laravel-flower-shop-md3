<?php


namespace App\Http\Services;


use App\Category;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\ProductRepository;

class CategoryService
{
    protected $categoryRepo;
    protected $productRepo;

    public function __construct(CategoryRepository $categoryRepo, ProductRepository $productRepo)
    {
        $this->categoryRepo = $categoryRepo;
        $this->productRepo = $productRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    public function create($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $this->categoryRepo->save($category);
    }


    public function find($id)
    {
    return $this->categoryRepo->find($id);
    }

    public function update($request, $categoryRepo)
    {
        $categoryRepo->name = $request->name;
        $this->categoryRepo->save($categoryRepo);
    }
    public function detail($id)
    {
        return $this->productRepo->filter($id);
    }

}
