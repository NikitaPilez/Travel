<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * This method view homepage.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $popularPosts = Post::where('isPopular','1')->get();
        $allPosts = Post::paginate(6);

        return view('index',[
            'popularPosts' => $popularPosts,
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * This method view category page.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCategory()
    {
    	return view('category');
    }
}
