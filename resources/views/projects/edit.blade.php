@extends('layouts.base')
@section('titulo',"Editar")

@section('contenido')

    <section style="background-color: #e3f2fd; width: 1200px; height: 500px;">
    <div class="container" style="border: 2px solid black; width: 650px; height: 420px; background-color: white; margin-top: 30px;">
        <form action="{{ route('projects.update',['project'=>$project->id]) }}" method="POST" style="margin-top: 10px">
        @csrf
        @method('put')
    
    <div class="mb-3">
        <label for="name" class="form-label"><b>Nombre</b></label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label"><b>Fecha</b></label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $project->date }}">
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label"><b>Numero documento</b></label>
        <input type="text" class="form-control" id="documento" name="documento" value="{{ $project->documento }}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label"><b>Celular</b></label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $project->phone }}">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar</a>
</form>
    </div>
    </section>



@endsection
