<?php

namespace App\Http\Controllers\store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
   public function index(){
        $blogs = Blog::all();
        return view('store.blog',compact('blogs'));
   }
}
