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
            <img class="figure-img img-fluid rounded" src="images/myPicture3.jpg" alt="" width="200" height="200">
        </div>
        <div class="col-12 col-sm-6 col-md-9 col-lg-10 mt-3" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <p>
                <b>Full Name:</b> Mohammad Ghorbani
            </p>
            <p>
                <b>English Name (preferred):</b> Michael
            </p>
            <p>
                <b>Born:</b> 1994
            </p>
            <p>
                <b>Academic Degree:</b> Master of Computer Engineering from Amirkabir University of Technology (Tehran, Iran)
            </p>
            <p>
                <b>Main Expertise:</b> Python/Django Developer, AWS, Docker, Celery, DjangoRestFramework, Redis
            </p>
            <p>
                <b>Other Experiences:</b> NLP, Fraud Detection, MongoDB, ElasticSearch, Kubernetes, Azure, PHP/Laravel, Bootstrap ...
            </p>
            <p>
                <b>Email: </b><a href="mailto:moohammad.ghoorbani@gmail.com">moohammad.ghoorbani@gmail.com</a>
            </p>
            <p>
                <b>Resume: </b><a href="https://www.m-gh.com/Mohammad_Resume.pdf">Download</a>
            </p>
            <p class="text-success font-weight-normal">
                The source of this website is publicly available at <a href="https://github.com/ghorbani-mohammad/my-website">Github</a>.
            </p>
        </div>
    </div>
@endsection

@section('footer')
<script>
    $("#about").addClass("active");
</script>
@endsection