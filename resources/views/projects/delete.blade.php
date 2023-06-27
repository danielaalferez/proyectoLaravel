@extends('layouts.base')
@section('titulo','ELIMINAR INSCRIPCIÓN')

@section('contenido')
    <section style="background-color: #e3f2fd; width: 1200px; height: 720px;">
        <div class="container" style="border: 2px solid black; width: 700px; height: 670px; background-color: white; margin-top: 30px;">
            <div class="text-center">
                <h3 class="text-center text-danger">
                    ¿Está seguro de eliminar su inscripción?
                </h3>
                <form action="{{ route('projects.destroy',['project' => $project->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
                <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar</a>
                </form>
            </div>
        </div>
    </section>



@endsection
