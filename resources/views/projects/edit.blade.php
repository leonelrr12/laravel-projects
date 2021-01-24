@extends('layout')

@section('title', 'Editar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-10 col-lg-6 mx-auto"> 
            <form class="bg-white py-3 px-4 rounded" action="{{route('projects.update', $project)}}" method="POST">
                @method("patch")
                @include('projects._form', ['btnTexto' => 'Actualizar', 'formTitle' => 'Editar Proyecto'])
            </form>  
        </div>
    </div>
</div>      
@endsection
