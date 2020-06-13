<?php


namespace App\Http\Services;


use App\Blog;
use App\Http\Controllers\BlogController;
use App\Http\Repositories\BlogRepository;
use Illuminate\Support\Facades\Storage;

class BlogService
{
    protected $blogRepo;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepo = $blogRepo;
    }

    public function getAll()
    {
        return $this->blogRepo->getAll();
    }

    public function find($id)
    {
        return $this->blogRepo->find($id);
    }

    public function create($request)
    {
        $blogRepo = new Blog();
        $blogRepo->name = $request->title;
        $blogRepo->content = $request->content;
        $blogRepo->image = $request->image->store('images','public');
        $blogRepo->category_id = $request->category;
        $this->blogRepo->save($blogRepo);
    }

    public function update($blogRepo, $request)
    {
        $blogRepo->name = $request->title;
        $blogRepo->category_id = $request->category;
        $oldFilePath = $blogRepo->image;
        if ($request->hasFile('image')){
            Storage::delete("public/" . $oldFilePath);
            $blogRepo->image = $request->image->store('images','public');
        }
        $blogRepo->content = $request->content;
        $this->blogRepo->save($blogRepo);
    }

}
