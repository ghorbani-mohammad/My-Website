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
    @media screen and (min-width: 480px) {
        .comment-body{
            padding:0px 15%;
            {{-- font-size: 1.4rem; --}}
            {{-- font-family: Georgia,Times,Times New Roman,serif;  --}}
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .comment-body{
            padding:0px 2%;
            {{-- font-family: Georgia,Times,Times New Roman,serif;  --}}
            {{-- font-size: 1.2rem; --}}
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

    <div class="comment-body">
        <h2 class="display-4" >Comments</h2>
        <hr>

        <form action="/posts/{{$post->link}}/comments" method="POST">
            @csrf
            @include('posts.errors')
            <div class="form-group">
                <textarea placeholder="Any ideas or thoughts?" id="body" name="body" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>

        @foreach ($post->comments as $comment)
            @if($comment->publish)
                <div class="alert alert-success">
                <span class="text-primary">{{$comment->body}}</span>
                    <div class="text-right">
                        {{$comment->created_at->toFormattedDateString()}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
