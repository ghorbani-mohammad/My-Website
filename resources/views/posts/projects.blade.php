@extends('master')

@section('head')
<style>
    @media screen and (min-width: 480px) {
        .post-body{
            padding:0px 15%;
            font-size: 1.4rem;
            font-family: Georgia,Times,Times New Roman,serif; 
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .post-body{
            padding:0px 2%;
            font-family: Georgia,Times,Times New Roman,serif; 
            font-size: 1.2rem;
        }
    }
    .post-body img{
            max-width:90% !important;

    }   
    video{
        width: 90%;
    }
    
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

@endsection


@section('content')
    <div class="text-center">
        <div class="alert alert-info my-5 d-inline-block">Here i will speak about my projects that i have done in past or working on it currently.</div>
    </div>
    @foreach($posts as $post)
    @include('posts.post')
        @if(!$loop->last)
            <div style="height: 50px;"></div>
        @endif
    @endforeach
@endsection