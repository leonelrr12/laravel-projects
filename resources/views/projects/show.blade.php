@extends('layout')

@section('title', 'Show')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">

            <h1>{{ $project->title }}</h1>

            <div class="card">
                <div class="card-body">
                    <p class="text-justify px-3">{{ $project->description }}</p>
                </div>
                <div class="card-footer">
                    <p>{{ $project->created_at->diffForHumans() }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-between my-3">
                @auth 
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{route('projects.edit', $project)}}">Editar</a>
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
                    </div>

                    <a class="btn btn-secondary" href="{{route('projects.index')}}">Regresar</a>

                    <form class="d-none" id="delete-project" method="post" action="{{route('projects.destroy', $project)}}">
                        @csrf
                        @method('delete')
                    </form>
                @endauth
            </div>
        </div>
    </div>
    </div>
@endsection
