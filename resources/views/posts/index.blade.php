@extends('posts.master')

@section('head')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@endsection
@section('content')
    <div style="height:2rem;"></div>
    @foreach($posts as $post)
        @include('posts.post')
        @if(!$loop->last)
            <div style="height: 50px;"></div>
        @endif
    @endforeach
@endsection

@section('footer')
<script>
    $("#weblog").addClass("active");
</script>
@endsection