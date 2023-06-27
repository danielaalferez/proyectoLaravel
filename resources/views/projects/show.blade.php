@extends('layouts.base')
@section('titulo', 'Detalle de proyecto')
@section("botonera")

@endsection
@section('contenido')
<section style="background-color: #e3f2fd; width: 1200px; height: 550px;">
    <div class="container" style="border: 2px solid black; width: 650px; height: 350px; background-color: white; margin-top: 30px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6" style="margin-top: 50px;">
            <h1 style="text-align:center;">{{ $project->name}}</h1>
            <h3 style="text-align:center;">
                {{ $project->date }}
            </h3>
            <h5 style="text-align:center;">
                {{ $project->documento }}
            </h5>
            <p style="text-align:center;">
                {{ $project->phone }}
            </p>
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-success" style="margin-top:20px; width: 90px; height: 40px; margin-left: 255px;">Regresar</a>
    </div>
</section>

    
@endsection
