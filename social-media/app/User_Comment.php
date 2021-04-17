<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Comment extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }
}
