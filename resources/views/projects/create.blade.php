@extends('layout')

@section('title', 'Create')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-6 mx-auto">        
                <form class="bg-white py-3 px-4 rounded" action="{{route('projects.store')}}" method="post">
                    @include('projects._form', ['btnTexto' => 'Guardar', 'formTitle' => 'Nuevo Proyecto'])
                </form>
            </div>
        </div>
    </div>
@endsection