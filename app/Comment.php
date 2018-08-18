<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['body','post_id','publish','replyTo'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
