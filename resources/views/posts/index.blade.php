@extends('master')

@section('head')
<style>
        @media screen and (min-width: 480px) {
            .post-body{
                padding:0px 15%;
                font-size: 1.4rem;
                 
            }
        }
        @media screen and (min-width: 0px) and (max-width:480px) {
            .post-body{
                padding:0px 2%;
                font-size: 1.2rem;
            }
        }
</style>
@endsection

@section('content')
    @foreach($posts as $post)
        @include('posts.post')
        @if(!$loop->last)
            <div style="height: 50px;"></div>
        @endif
    @endforeach
@endsection