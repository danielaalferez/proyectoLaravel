@extends('layouts.base')
@section('titulo', 'Inscripciones')
@section('botonera')

    <a href="{{ route('projects.create') }}" class="btn btn-primary">Inscripciones aqui</a>

@endsection

@section('contenido')
    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>nombre</td>
                    <td>fecha</td>
                    <td>codigo</td>
                    <td>numero documento</td>
                    <td>telefono</td>
                   
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
                            {{ $project->code }}
                        </td>
                        <td>
                            {{ $project->documento }}
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
@endsection
