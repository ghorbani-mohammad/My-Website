@extends('posts.master')

@section('head')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

@endsection


@section('content')
    <div class="text-center">
        <div class="alert alert-info my-5 d-inline-block">Here I will speak about my projects that I have done in past or working on it currently.</div>
    </div>
    @foreach($posts as $post)
    @include('posts.post')
        {{-- @if(!$loop->last) --}}
            <div style="height: 50px;"></div>
        {{-- @endif --}}
    @endforeach
@endsection

@section('footer')
<script>
    $("#projects").addClass("active");
</script>
@endsection