@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-12 d-flex justify-content-center my-4">
            <h1>Ciao {{Auth::user()->name}}!</h1>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <h3>Numero progetti: {{$count_projects}}</h3>
        </div>
        <div class="row my-5">
            <div class="col-12 d-flex justify-content-center">
                <h3>Link social</h3>
            </div>
            <div class="offset-4 col-2 d-flex justify-content-center">
                <a href="https://github.com/gab1144" class="social-links"><i class="fa-brands fa-github"></i></a>
            </div>
            <div class="col-2 d-flex justify-content-center">
            <a href="https://www.linkedin.com/in/gabriele-rinciari-05b915246/" class="social-links"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection
