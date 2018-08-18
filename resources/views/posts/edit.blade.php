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
            @if($post->type=='blog')
                <label for="type">Type: <span class="lead text-success">(Blog selected)</span></label>
                <select name="type" class="form-control" id="type">
                    <option value="blog">Blog</option>
                    <option value="proj">Project</option>
            </select> 
            @else
                <label for="type">Type: <span class="lead text-success">(Project selected)</span></label>
                <select name="type" class="form-control" id="type">
                    <option value="proj">Project</option>
                    <option value="blog">Blog</option>
            </select> 
            @endif
            </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea id="body" name="body" class="summernote form-control">{{$post->body}}</textarea>
        </div>
        <div class="form-group">
            @if($post->status=='publish')
                <label for="status">Status: <span class="lead text-success">(Publish selected)</span></label>
                <select name="status" class="form-control" id="status">
                    <option value="publish">Publish</option>
                    <option value="preview">Preview</option>
                </select> 
            @elseif($post->status=='preview')
                <label for="status">Status: <span class="lead text-success">(Preview selected)</span></label>
                <select name="status" class="form-control" id="status">
                    <option value="preview">Preview</option>
                    <option value="publish">Publish</option>
                </select> 
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-warning" type="submit" name="_method" value="PATCH">Edit</button>
            <button class="btn btn-danger" type="submit" name="_method" value="DELETE">Delete</button>
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
                fontNames: ['Georgia','iransans','Sacramento', 'Tahoma', 'Comic Sans MS'],
                fontNamesIgnoreCheck: ['iransans','Sacramento'],
                fontSizes: ['8', '9', '10', '11', '12', '14', '18', '24', '36', '48' , '64', '82', '150'],
                height:200
            });
        });
</script>
@endsection