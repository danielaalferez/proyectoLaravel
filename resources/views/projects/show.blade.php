@extends('layouts.base')
@section('titulo', 'Detalle de proyecto')
@section("botonera")
<a href="{{ route('projects.index') }}" class="btn btn-success">Regresar a proyectos</a>
@endsection
@section('contenido')

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
           
            <h1>{{ $project->nombre }}</h1>
            <p>
                {{ $project->descripcion }}
            </p>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <h2 class="text-center text-primary mb-3">Tareas</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td width="10%">ID</td>
                        <td width="45%">Título</td>
                        <td width="45%">Descripción</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pays as $pay)
                        <tr>
                            <td>{{ $pay->id }}</td>
                            <td>{{ $pay->titulo }}</td>
                            <td>{{ $pay->descripcion }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
