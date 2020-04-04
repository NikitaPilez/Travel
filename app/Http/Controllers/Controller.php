<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

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
}
