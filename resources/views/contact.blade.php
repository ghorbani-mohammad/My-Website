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
            <img class="figure-img img-fluid rounded" src="images/myPicture2.jpg" alt="" width="200" height="200">
        </div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-10 mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <p>
                <b>Name:</b> Michael Ghorb
            </p>
            <p>
                <b>Age:</b> 27 Years Old
            </p>
            <p>
                <b>Academic Degree:</b> Master of Computer Engineering from Amirkabir university
            </p>
            <p>
                <b>Location:</b> Turkey/Ankara
            </p>
            <p>
                <b>Expertises:</b> Django/Python Developer
            </p>
            <p>
                <b>Experiences:</b> NLP, Fraud Detection, ML Algorithms, Docker, Kubernetes, Azure, PHP/Laravel, Bootstrap ...
            </p>
            <p>
                <b>Email:</b> <a href="mailto:michael.ghorb@gmail.com">michael.ghorb@gmail.com</a>
            </p>
            <p>
                <b>LinkedIn:</b> <a href="">https://www.linkedin.com/in/gh-m/</a>
            </p>
            <p>
                <b>CV:</b> <a href="">https://www.m-gh.info/Resume.pdf</a>
            </p>
            <p class="text-success font-weight-normal">
                The source of this website is publicly available at <a href="https://github.com/aali361/my-website">Github</a>.
            </p>
        </div>
    </div>
@endsection

@section('footer')
<script>
    $("#about").addClass("active");
</script>
@endsection