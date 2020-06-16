<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Services\BlogService;
use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    protected $blogService;
    protected $categoryService;
    public function __construct(BlogService $blogService, CategoryService $categoryService)
    {
        $this->blogService = $blogService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAll();
        return view('blogs.list',compact('blogs'));
    }

    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('blogs.create',compact('categories'));
    }


    public function store(BlogRequest $request)
    {
        $this->blogService->create($request);
        Session::flash('success','Add blog completed');
        return redirect()->route('blog.create');
    }

    public function edit($id)
    {
        $categories = $this->categoryService->getAll();
        $blog = $this->blogService->find($id);
        return view('blogs.edit',compact('categories','blog'));
    }

    public function update(BlogRequest $request, $id)
    {
        $blog = $this->blogService->find($id);
        $this->blogService->update($blog,$request);
        Session::flash('success','Update Completed');
        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        $blog = $this->blogService->find($id);
        $blog->delete();
        Session::flash('success','Delete blog completed');
        return redirect()->route('blog.index');
    }
}
