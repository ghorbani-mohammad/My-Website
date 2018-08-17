@extends('master')

@section('head')
<style>
    @font-face {
        font-family: iransans;
        font-style: normal;
        font-weight: normal;
        font-display: swap;
        src: url(fonts/IRANSans-web.woff2);
    }
    @font-face {
        font-family: iransans;
        font-style: normal;
        font-weight: lighter;
        font-display: swap;
        src: url(fonts/IRANSans-Light-web.woff2);
    }
    @font-face {
        font-family: iransans;
        font-style: normal;
        font-weight: bold;
        font-display: swap;
        src: url(fonts/IRANSans-Bold-web.woff2);
    }
    @font-face {
        font-family: iransansDastNevis;
        font-style: normal;
        font-weight: normal;
        font-display: swap;
        src: url(fonts/iransansDastNevis.woff);
    }
</style>
@endsection

@section('content')

    
        <div class=" text-center my-5">
            <img class="img-fluid" src="images/sadness.webp" style="max-height: 600px;max-width: 400px; width: 90%;">
            <p class="my-3 text-center" style="font-family: iransansDastNevis; font-size: 0.9rem;white-space: pre;">
... 
این روزگار بد کرده با قلبم
کم بوده از این زندگی سهمم
دلیل می بافم برای عشق 
برای چیزی که نمی فهمم 
از آدمای شهر بیزارم 
چون با یکیشون خاطره دارم 
به من نگو با عشق بی رحمی 
من <span class="text-danger" style="font-family: iransans;font-weight: bold;">زخم</span> دارم تو نمی فهمی 
... 
            </p>
            <audio controls style="max-width:400px; width: 90%;">
                <source src="mp3/Shadmehr Aghili - Rabeteh 128.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

@endsection

@section('footer')
<script>
    $("#home").addClass("active");
</script>
@endsection