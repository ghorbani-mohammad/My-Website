<div class="my-5">
    <a class="display-4 mb-5" style="text-decoration: none;" href="/posts/{{$post->link}}">{{$post->title}}</a>    
    <div class="my-5 post-body">
        {!!$post->body!!}
    </div>
    <hr class="mb-0">
    <div style="font-size:0.9rem; color:#abbbc0;">Published at<span style="color: #999;"> {!!$post->created_at->toFormattedDateString()!!}</span></div>
</div>