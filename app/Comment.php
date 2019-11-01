<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * This method return user of the comment.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * This method return child comments of the comment.
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childComments()
    {
        return Comment::where('parent_id', $this->id)->get();
    }
}
