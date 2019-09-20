<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * This method find category by name.
     * @param $categoryName
     * @return mixed
     */
    public static function findByName($tagName)
    {
        return Tag::where('name', $tagName)->first();
    }

    /**
     * This method return posts of the tags.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'tags_posts', 'tag_id', 'post_id');
    }
}
