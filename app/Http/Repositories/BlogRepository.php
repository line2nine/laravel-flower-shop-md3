<?php


namespace App\Http\Repositories;


use App\Blog;

class BlogRepository
{
    protected $blog;
    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function getAll()
    {
        return $this->blog->all();
    }

    public function find($id)
    {
        return $this->blog->findOrFail($id);
    }

    public function save($blog)
    {
        $blog->save();
    }
}
