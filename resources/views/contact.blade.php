@extends('layout')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form action=""  py-3 px-4class="bg-white shadow rounded">
                <h1 class="display-4">Contacto</h1>
                <hr>
                <div class="form-group">
                    <input class="form-control bg-light shadow @error('name') is-invalid @else border-0 @enderror" name="name" type="text" placeholder="Nombre ...">
                </div>
                <div class="form-group">
                    <input class="form-control bg-light shadow @error('email') is-invalid @else border-0 @enderror" name="email" type="text" placeholder="Email ...">
                </div>
                <div class="form-group">
                    <input class="form-control bg-light shadow @error('subject') is-invalid @else border-0 @enderror" name="subject" type="text" placeholder="Asunto ..."> 
                </div>
                <div class="form-group">
                    <textarea class="form-control bg-light shadow @error('body') is-invalid @else border-0 @enderror" name="body" id="" cols="30" rows="5">Mensaje ...</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary d-block">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection