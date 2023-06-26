@extends('layouts.base')
@section('titulo',"FORMULARIO DE INSCRIPCIONES")

@section('contenido')
<section style="background-color: #e3f2fd; width: 1200px; height: 550px;">
<div class="container" style="border: 2px solid black; width: 650px; height: 500px; background-color: white; margin-top: 30px;">
<form action="{{ route('projects.store') }}" method="POST" style="margin-top: 10px;">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label"><b>Nombre</b></label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label"><b>Fecha</b></label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="mb-3">
        <label for="code" class="form-label"><b>Tipo documento</b></label>
        <select name="code" id="code" class="form-control">
            <option value="T.I">Tarjeta de identidad</option>
            <option value="C.C">Cedula de ciudadania</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label"><b>Numero documento</b></label>
        <input type="text" class="form-control" id="documento" name="documento">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label"><b>Celular</b></label>
        <input type="text" class="form-control" id="phone" name="phone">
    </div>
   
    <button type="submit" class="btn btn-primary">Crear</button>
    <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar </a>
</form>
</div>
</section>



@endsection





