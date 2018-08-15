@extends('posts.master')

@section('head')
<style>
    @media screen and (min-width: 480px) {
        .blog-body{
            padding:0px 15%;
            font-size: 1.4rem;
            font-family: Georgia,Times,Times New Roman,serif; 
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .blog-body{
            padding:0px 2%;
            font-family: Georgia,Times,Times New Roman,serif; 
            font-size: 1.2rem;
        }
    }
</style>
@endsection

@section('content')

<div class="my-5">
    <a class="display-4" style="text-decoration: none;" href="/posts/{{$post->link}}">{{$post->title}}</a>
    <div style="color: #abbbc0;">{!!$post->created_at->toFormattedDateString()!!}</div>
    <hr>
    <div class="mt-2 blog-body">
        {!!$post->body!!}
    </div>
</div>
@endsection
