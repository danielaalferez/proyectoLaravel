@extends('layouts.base')
@section('titulo',"Editar un nuevo proyecto")
@section("botonera")
<a href="{{ route('projects.index') }}" class="btn btn-success">Regresar a proyectos</a>
@endsection

@section('contenido')

<form action="{{ route('projects.edit',['project'=>$project->id]) }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $project->nombre }}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ $project->descripcion }}</textarea>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@endsection
