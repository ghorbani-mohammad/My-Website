@extends('master')

@section('head')
<style>
    .post-body{
        font-family: Georgia,Times,Times New Roman,serif !important; 
    }
    .post-body img{
        max-width: 90%;
    }
    @media screen and (min-width: 480px) {
        .post-body{
            padding:0px 15%;
            font-size: 1.4rem !important;
                
        }
    }
    @media screen and (min-width: 0px) and (max-width:480px) {
        .post-body{
            padding:0px 2%;
            font-size: 1.2rem !important;
        }
    }
    
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
@endsection

@section('content')
    @foreach($posts as $post)
        @include('posts.post')
        @if(!$loop->last)
            <div style="height: 50px;"></div>
        @endif
    @endforeach
@endsection