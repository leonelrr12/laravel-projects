@csrf
<h1 class="display-4">{{$formTitle}}</h1>
<hr>
<div class="form-group">

    Título:
    <input class="form-control bg-light shadow @error('title') is-invalid @else border-0 @enderror" type="text" name="title" value="{{ old('title', $project->title) }}" >

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">

    URL:
    <input class="form-control bg-light shadow @error('slug') is-invalid @else border-0 @enderror" type="text" name="slug" value="{{ old('slug', $project->title) }}">

    @error('slug')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="form-group">

    Descripción:
    <textarea class="form-control bg-light shadow @error('description') is-invalid @else border-0 @enderror" name="description" id="" cols="30" rows="5">{{ old('description', $project->description) }}</textarea>

    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror     
</div>   
<div class="form-group">
    <button class="btn btn-primary" type="submit">{{$btnTexto}}</button>
    <a href="{{route('projects.index')}}" class="btn btn-secondary">Cancelar</a>
</div>


