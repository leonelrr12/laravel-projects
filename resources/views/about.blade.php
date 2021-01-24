@extends('layout')

@section('title', 'About')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="Desarrollo Web">
        </div>    
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Quienes somos</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe quibusdam dolorem quo obcaecati? Reiciendis quos aut facilis, necessitatibus quidem libero odio quaerat recusandae, molestias dicta odit culpa nulla! Impedit, perferendis.</p>
            <a class="btn btn-primary d-block" href="{{route('contact')}}">Contactáme</a>
            <a class="btn btn-outline-primary d-block mt-2" href="{{route('projects.index')}}">Portafolio</a>
        </div>
    </div>
</div>
@endsection