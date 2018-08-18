<div class="my-5">
    <a class="display-4 mb-5" style="text-decoration: none;" href="/posts/{{$post->link}}">{{$post->title}}</a>    
    <div class="my-5 post-body">
        {!!$post->body!!}
    </div>
    <hr class="mb-0">
    <div class="row px-3" style="font-size:0.9rem;">
        <div class="col-9" style="color:#abbbc0;">Published at<span style="color: #0fb39e;" class="text-right"> {!!$post->created_at->toFormattedDateString()!!}</span></div>
        <div class="col-3 text-right" >
            <a href="/posts/{{$post->link}}#comments"><i class="far fa-comment"></i> {!!$post->countComments!!}</a>
        </div>
    </div>
</div>