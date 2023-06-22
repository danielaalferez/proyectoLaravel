@extends('layouts.base')
@section('titulo',"FORMULARIO DE PAGOS")
@section("botonera")
<a href="{{ route('projects.index') }}" class="btn btn-success">Regresar a Pagos</a>
@endsection

@section('contenido')

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
   
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection

@section('scripts')

@endsection
