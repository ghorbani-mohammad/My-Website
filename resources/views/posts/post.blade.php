<div class="mt-3 px-sm-5 px-0">
    <div class="row">  
        <div class="col-3"><img loading=lazy class="img-fluid post-img" src="{{$post->mainImage}}"></div>
        <div class="col-9 ">
            <a class="display-4 post-title" style="text-decoration: none;" href="/posts/{{$post->link}}">{{$post->title}}</a>
            <p class="mt-2">{{$post->description}}</p>
            <div class="row" style="font-size:0.9rem;">
                <div class="col-8" style="color:#abbbc0;">Published at<span style="color: #0fb39e;" class="text-right"> {!!$post->created_at->toFormattedDateString()!!}</span></div>
                <div class="col-4 text-right" >
                    <a href="/posts/{{$post->link}}#comments"><i class="far fa-comment"></i> {!!$post->countComments!!}</a>
                </div>
            </div>
        </div>
    </div>
</div>

