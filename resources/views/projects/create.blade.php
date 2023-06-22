@extends('layouts.base')
@section('titulo',"FORMULARIO DE INSCRIPCIONES")
@section("botonera")
<a href="{{ route('projects.index') }}" class="btn btn-success">Regresar </a>
@endsection

@section('contenido')

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Fecha</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label">tipo documento</label>
        <select name="documento" id="documento" class="form-control">
            <option value="T.I">Tarjeta de identidad</option>
            <option value="C.C">Cedula de ciudadania</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="code" class="form-label">numero documento</label>
        <input type="text" class="form-control" id="code" name="code">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">celular</label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
   
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection


