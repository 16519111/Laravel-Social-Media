<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
    protected $fillable = ["type", "contents"];

    public function like()
    {
        return $this->hasMany('App\Like');
    }

    public function comment_post()
    {
        return $this->hasMany('App\Comment_Post');
    }
}
