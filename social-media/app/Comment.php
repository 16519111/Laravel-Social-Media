<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user_comment()
    {
        return $this->hasMany('App\User_Comment');
    }

    public function comment_post()
    {
        return $this->hasMany('App\Comment_Post');
    }
}
