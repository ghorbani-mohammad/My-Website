@extends('posts.master')

@section('content')

<h1>
    {{$post->title}}
</h1>

    {!!$post->body!!}

@endsection
