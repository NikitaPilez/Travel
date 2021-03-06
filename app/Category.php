<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'category';

    /**
     * This method find category by name.
     * @param $categoryName
     * @return mixed
     */
    public static function findByName($categoryName)
    {
        return Category::where('name', $categoryName)->first();
    }

    /**
     * This method return posts your object.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
