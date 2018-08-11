@extends('master')

@section('head')
<style>
    @font-face {
        font-family: iransans;
        src: url(fonts/IRANSans-web.woff2);
    }
    @font-face {
        font-family: iransans-light;
        src: url(fonts/IRANSans-Light-web.woff2);
    }
    @font-face {
        font-family: iransans-bold;
        src: url(fonts/IRANSans-Bold-web.woff2);
    }
</style>
@endsection

@section('content')

    
        <div class=" text-center my-5">
            <img class="img-fluid" src="images/sadness.jpg" style="max-height: 600px;max-width: 400px; width: 90%;">
            <p class="my-3 text-center" style="font-family: iransans; font-size: 0.9rem;white-space: pre;">
... 
این روزگار بد کرده با قلبم
کم بوده از این زندگی سهمم
دلیل می بافم برای عشق 
برای چیزی که نمی فهمم 
از آدمای شهر بیزارم 
چون با یکیشون خاطره دارم 
به من نگو با عشق بی رحمی 
من <span class="text-danger" style="iransans-bold"><strong>زخم</strong></span> دارم تو نمی فهمی 
... 
            </p>
            <audio controls style="max-width:400px; width: 90%;">
                <source src="mp3/Shadmehr Aghili - Rabeteh 128.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

    {{-- <div class="alert alert-primary" role="alert">
            Here I will share my 
            <span class="font-weight-bold">Thoughts</span>,
            <span class="font-weight-bold"> My projects</span> and
            <span class="font-weight-bold">Anything </span>
            that can be publish.
    </div>
    <div class="alert alert-primary" role="alert">
            I will write things in English (mostly). This is good to Me and <b>You</b>. Belive me:)
    </div>

    <div class="jumbotron mt-5">
        <h1 class="display-4">Hello!!!</h1>
        <p class="lead">After about two years, I am here!!!</p>
        <hr class="my-4">
        <p>Here i will publish my thought, my projects and every thing that can be publish.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div> --}}

@endsection

@section('footer')
<script>
    $("#home").addClass("active");
</script>
@endsection