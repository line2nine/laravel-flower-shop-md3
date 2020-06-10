<?php


namespace App\Http\Services;


use App\Category;
use App\Http\Repositories\CategoryRepository;

class CategoryService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
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






}
