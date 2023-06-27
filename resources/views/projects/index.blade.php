@extends('layouts.base')
@section('titulo', 'Inscripciones')

@section('botonera')

    <a href="{{ route('projects.create') }}" class="btn btn-primary">Inscribase aqui</a>

@endsection

@section('contenido')
<section style="background-color: #e3f2fd; width: 100%; height: 400px">
    <div class="container d-flex justify-content-center align-items-center" style="background-color: white; width: 80%; margin-top: 30px">
    <div class="tabla-lista" style="margin-top: 20px">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td style="text-align:center;"><b>ID</b></td>
                    <td style="text-align:center;"><b>Nombre</b></td>
                    <td style="text-align:center;"><b>Fecha</b></td>
                    <td style="text-align:center;"><b>Documento</b></td>
                    <td style="text-align:center;"><b>Numero celular</b></td>
                    <td style="text-align:center;"><b>Acciones</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>
                            {{ $project->id }}
                        </td>
                        <td>
                            {{ $project->name }}
                        </td>
                        <td>
                            {{ $project->date }}
                        </td>
                        <td>
                            {{ $project->documento}}
                        </td>
                        <td>
                            {{ $project->phone }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('projects.show',['project'=>$project->id]) }}" class="btn btn-success">Detalle</a>
                                <a href="{{ route('projects.edit',['project'=>$project->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('projects.delete',['project'=>$project->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</section>
    
@endsection
