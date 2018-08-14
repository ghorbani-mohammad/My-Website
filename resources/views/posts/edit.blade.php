@extends('posts.master')


@section('head')
<link href="/summernote/summernote-bs4.css" rel="stylesheet">
@endsection

@section('content')
<h1 class="display-4">Edit Post</h1>
<hr>
    <form action="/posts/{{$post->link}}" method="POST">
        @csrf
        @method('PATCH')
        @include('posts.errors')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" class="form-control" id="link" name="link" value="{{$post->link}}" readonly>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" name="body" class="summernote form-control">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Edit</button>
        </div>
    </form>
@endsection

@section('footer')

<script src="/summernote/summernote-bs4.js"></script>    
 
<script>
        $(document).ready(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture','video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ],
                fontNames: ['iransans','Sacramento', 'Tahoma', 'Comic Sans MS'],
                fontNamesIgnoreCheck: ['iransans','Sacramento'],
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                height:200
            });
        });
</script>
@endsection