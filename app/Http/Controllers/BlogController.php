<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{

    /**
     * BlogController constructor.
     * In construct method get all global variables.
     */
    public function __construct()
    {

        $allCategories = Category::all();
        $popularPosts = Post::where('isPopular', '1')->get();

        View::share('allCategories', $allCategories);
        View::share('popularPosts', $popularPosts);
    }

    /**
     * This method view homepage.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $allPosts = Post::paginate(6);

        return view('index', [
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * This method view category page.
     * @param null $categoryName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categoryAction($categoryName = null)
    {
        $category = Category::findByName($categoryName);
        $allPosts = Post::where('category_id', $category->id)->paginate(6);

        return view('category', [
            'category' => $category,
            'allPosts' => $allPosts,
        ]);
    }
}
