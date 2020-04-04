<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;

class BlogController extends Controller
{
    /**
     * This method view homepage.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $allPosts = Post::paginate(12);

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
        $allPosts = Post::where('category_id', $category->id)->paginate(12);

        return view('category.index', [
            'category' => $category,
            'allPosts' => $allPosts,
        ]);
    }

    /**
     * This method view post page.
     * @param null $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postAction($id = null)
    {
        $post = Post::find($id);
        $previousPost = Post::find($id - 1);
        $nextPost = Post::find($id + 1);

        return view('post.index', [
            'post' => $post,
            'previousPost' => $previousPost,
            'nextPost' => $nextPost,
        ]);
    }

    /**
     * This method view category page.
     * @param null $categoryName
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tagAction($tagName = null)
    {
        $tag = Tag::findByName($tagName);
        $allPosts = $tag->posts;

        return view('tag.index', [
            'tag' => $tag,
            'allPosts' => $allPosts,
        ]);
    }
}
