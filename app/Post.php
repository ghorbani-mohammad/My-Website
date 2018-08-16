<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    protected $fillable=['title','body','link'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        $this->comments()->create([
            'body' => $body,
            'publish' => 1,
            'post_id' => $this->id
        ]);
        // Comment::create([
        //     'body' => $body,
        //     'publish' => 1,
        //     'post_id' => $this->id
        // ]);
    }
}
