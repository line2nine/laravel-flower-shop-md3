<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(){
        $categories = $this->categoryService->getAll();
        return view('categories.list',compact('categories'));
    }

    public function edit($id)
    {
        $category = $this->categoryService->find($id);
        return view('categories.edit',compact('category'));
    }

    public function update(EditCategoryRequest $request,$id)
    {
        $category = $this->categoryService->find($id);
        $this->categoryService->update($request, $category);
        Session::flash('success','Edit Completed');
        return redirect('admin/category');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CreateCategoryRequest $request)
    {
        $this->categoryService->create($request);
        Session::flash('success','Add Completed');
        return redirect()->route('category.create');
    }

    public function destroy($id){
        $category = $this->categoryService->find($id);
        $category->delete();
        Session::flash('success','Delete Completed');
        return redirect()->route('category.index');
    }

    public function detail($id){
        $products = $this->categoryService->detail($id);
        $category = $this->categoryService->find($id);
        return view('categories.detail',compact('products','category'));
    }
}
