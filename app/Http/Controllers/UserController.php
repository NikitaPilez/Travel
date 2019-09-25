<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexAction($userId = null)
    {
        $userPosts = Post::paginate(12);
        $user = User::find($userId);

        return view('user.index', [
            'allPosts' => $userPosts,
            'user' => $user,
        ]);
    }
}
