@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quibusdam dolorem quo obcaecati? Reiciendis quos aut facilis, necessitatibus quidem libero odio quaerat recusandae, molestias dicta odit culpa nulla! Impedit, perferendis.</p>
                <a class="btn btn-primary d-block" href="{{route('contact')}}">Contactáme</a>
                <a class="btn btn-outline-primary d-block mt-2" href="{{route('projects.index')}}">Portafolio</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid mt-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>            
        </div>
    </div>
@endsection