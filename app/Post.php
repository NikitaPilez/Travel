<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    /**
     * This method return categories your object.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * This method return user your object.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * This method return all tags of the post.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tags_posts', 'post_id', 'tag_id');
    }

    /**
     * This method return comments of the post.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * This method return stars of the post.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stars()
    {
        return $this->hasMany('App\StarPost');
    }


    /**
     * This method check has current user star on the this post.
     * @return bool
     */
    public function currentUserIsLike()
    {
        $isLike = [];

        if(Auth::check()){
            $isLike = StarPost::where('user_id',Auth::user()->id)->where('post_id',$this->id)->get();
        }

        return count($isLike) > 0;
    }

}

