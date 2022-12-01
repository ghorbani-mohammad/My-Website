@extends('master')

@section('head')
<style>
    .figure-caption{
        font-size: 1.2rem;
        color: #636e72;
    }
    .lead-5{
        font-size: 1.5rem;
        color: #0984e3;
    }
</style>

@endsection

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-12 col-sm-6 col-md-3 col-lg-2 text-center ">
            <img class="figure-img img-fluid rounded" src="images/myPicture.jpg" alt="" width="200" height="200">
        </div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-10 mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <p class="figure-caption">My name is Mohammad Ghorbani. I was born in a small city called Tafresh. My birth date is 24 April 1994. I have just one brother so we are small family but Lovely one :). I studied Computer Engineering (CE) at Arak University. I keen to learn new things in computer science and electronic fields. My favorite sports are swimming and hiking. I wish i could have positive impact on my country as an indiviual.</p>
            <p class="figure-caption">I created this website to register my thoughts and my projects. It has some dark sides but it has also some benefits as so. The important thing that convinced me to start this website is that it can help me to find peopole similar to myself so i will not waste my time with wrong person (in similariy prespect).</p>
            <br>
            <p class="lead-5 text-center">This website will help me to find more people like myself.</p>
            <br>
            <p class="figure-caption">The most important reason that i like to mention is that I will share my projects in past, current and even in future on this website. So as a resume this website will help me to demonstrate my skills to recruiter.</p>
            <br>
            <p class="lead-5 text-center">As a resume, a website will have great impact on recruiter.</p>
            <br>
            <p class="figure-caption">Another reason that come to my mind is that I will try to publish my things in English (mostly!) so it will help me to improve my English Writing.</p>
            <br>
            <p class="lead-5 text-center">Improve English Writing is another reason to creating this website.</p>
            <br>
            <p class="figure-caption">Probably you will say "Do you ever heard about Facebook or Twitter?" You are right! But you know what? I am a programmer (skillful one :/) and I want to have my own stuff.</p>
            <p class="figure-caption mb-5">Ok, it's look like this section is not only about me but is about me and this website.</p>
        </div>
    </div>
@endsection

@section('footer')
<script>
    $("#about").addClass("active");
</script>
@endsection