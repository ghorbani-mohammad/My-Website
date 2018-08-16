<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    //
    public function store($post)
    {
        $this->validate(request(),[
            'body'=>'required|min:2'
        ]);
        $post=Post::where('link',$post)->first();  
        $post->addComment(request('body'));
        return back();
    }
}
