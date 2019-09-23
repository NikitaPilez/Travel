<?php

namespace App\Http\Controllers;

use App\StarPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    /**
     * This method put star on the post.
     * @param Request $request
     * @return array
     */
    public function putStar(Request $request)
    {
        $response = [];

        if($_POST['actionStar'] == 'put'){
            $starPost = new StarPost;
            $starPost->post_id = $_POST['postId'];
            $starPost->user_id = Auth::user()->id;
            $starPost->created_at = time();
            $starPost->save();
            $response['hasStar'] = true;
        }else {
            $starPost = StarPost::where('post_id',$_POST['postId'])->where('user_id', Auth::user()->id)->first();
            $starPost->delete();
            $response['hasStar'] = false;
        }

        return $response;
    }
}

