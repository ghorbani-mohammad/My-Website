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
            <p>
                My name is Mohammad Ghorbani. I was born in 1994 (when creating this post I'm 26 years old).
            </p>
            <p>
                Currently I'm located in Iran/Tehran. I strated my professional work with PHP/LARVEL, but after 3 years I swithced to Python/Django.
            </p>
            <p>
                Email: <a href="mailto:ghorbani1994@gmail.com">ghorbani1994@gmail.com</a>
            </p>
            <p>
                Linkdin: <a href="">https://www.linkedin.com/in/mohammad-ghorbani-303855105/</a>
            </p>
        </div>
    </div>
@endsection

@section('footer')
<script>
    $("#about").addClass("active");
</script>
@endsection