<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $popularPosts = Post::where('isPopular','1')->get();
        $allPosts = Post::paginate(6);

        return view('index',[
            'popularPosts' => $popularPosts,
            'allPosts' => $allPosts,
        ]);
    }

    public function getCategory()
    {
    	return view('category');
    }
}
