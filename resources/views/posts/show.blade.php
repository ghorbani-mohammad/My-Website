@extends('posts.master')

@section('head')
<style>
    ::placeholder { /* Most modern browsers support this now. */
        color:    #74b9ff !important;
    }
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
        }
        .comment-date{
            font-size: 0.8rem;
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .comment-body{
            padding:0px 2%;
        }
        .comment-date{
            font-size: 0.7rem;
        }
    }
    video{
        max-width:90% !important;
    }
    .blog-body img{
            max-width:90% !important;
    }   
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@endsection

@section('content')



<div class="my-5">
    <a class="display-4" style="text-decoration: none;" href="/posts/{{$post->link}}">{{$post->title}}</a>
    <div class="ml-3" style="color: #abbbc0;">{!!$post->created_at->toFormattedDateString()!!}</div>
    <hr>



    <div class="mt-2 blog-body">
        {!!$post->body!!}
    </div>



    <div class="comment-body" id="comments">
        <div class="row">
            <h2 class="col display-4" >Comments</h2>
            <div class="col text-right mr-3 mt-3 mt-sm-0" >
                <span style="position: absolute; bottom: 0;">
                        <div class="row"><a href=""><i class="far fa-comment"></i> {!!$post->countComments!!}</a></div>
                </span>
            </div>
        </div>
        <hr>
        @if(Session::has('message'))
            <div id="alert" class="alert {{ Session::get('alert-class') }}">{{ Session::get('message') }}</div>
        @endif
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
                <div class="alert alert-primary comment-text" id="comment{{$comment->id}}">
                <span class="" style="color: black;">{{$comment->body}}</span>
                    <div class="text-right comment-date" style="color:#999;">
                        {{$comment->created_at->toFormattedDateString()}}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection

@section('footer')
<script>
    (function($){
        window.onbeforeunload = function(e){    
        window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
        };
        $.maintainscroll = function() {
        if(window.name.indexOf('[') > 0)
        {
        var parts = window.name.split('['); 
        window.name = $.trim(parts[0]);
        window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
        }   
        };  
        $.maintainscroll();
        })(jQuery);
</script>
@endsection