@extends('master')

@section('content')
<div class="text-center">
    <div class="alert alert-info my-5">For seeing the total list of my projects, please check my <a href="https://github.com/ghorbani-mohammad" target="_blank" class="alert-link">GitHub account</a>.</div>
    <div class="container my-5">
        <div class="post mb-5">
            <h1 class="display-4 text-left mb-5">A Project About Car Insurance Management System</h1>
            <img class="img-fluid" src="images/insuranceProject.jpg" alt="">
            <p class="mt-2">This was project by master Iman Amini that was our instructor at Interaction Desing course. It was programmed by C#.</p>
            <hr class="mb-0">
            <div class="text-left">
                <span class="font-weight-light" style="font-size: 0.9rem">Publish Date: <span class="font-weight-normal">8.2.2018</span></span>
            </div>
        </div>
        <div class="post">
                <h1 class="display-4 text-left mb-5">My Grade Bot</h1>
            <video class="embed-responsive-item" style="max-height:400px; max-width: 600px;" controls><source src="/videos/myGradeBot1.mp4" type="video/mp4"></video>
            <p class="mt-2">This was my last project of bachelor Degree. A Telegram bot that will help students to easily see their grades on telegram. It was on Golestan University Management.</p>
            <hr class="mb-0">
            <div class="text-left">
                <span class="font-weight-light" style="font-size: 0.9rem">Publish Date: <span class="font-weight-normal">8.2.2018</span></span>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
    $("#projects").addClass("active");
</script>
@endsection

