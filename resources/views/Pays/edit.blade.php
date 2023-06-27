@extends('layouts.base')
@section('titulo',"EDITAR PAGO")
@section("botonera")
<a href="{{ route('pays.index') }}" class="btn btn-success">Regresar a Pagos</a>
@endsection

@section('contenido')

<form action="{{ route('pays.update',['pay'=>$pay->id]) }}" method="POST">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="titulo" class="form-label">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $pay->titulo }}">
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10">{{ $pay->descripcion }}</textarea>
        <input type="hidden" value="{{ Auth::pay()->id }}" name="pay_id">
    </div>
    <div class="mb-3">
        <label for="project_id" class="form-label">Proyecto</label>
        <select name="project_id_id" id="project_id_id" class="form-control" required>
            @foreach ($projects as $project)
                @if($pay->project_id == $project->id)
                <option value="{{ $project->id }}" selected>{{ $project->nombre }}</option>
                @else
                <option value="{{ $project->id }}">{{ $project_id->name }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select name="estado" id="estado" class="form-control" required>
            @if($tarea->estado == "pendiente")
            <option value="pendiente" selected>Pendiente</option>
            @else
            <option value="pendiente">Pendiente</option>
            @endif

            @if($tarea->estado == "iniciada")
            <option value="iniciada" selected>Iniciada</option>
            @else
            <option value="iniciada">Iniciada</option>
            @endif

            @if($tarea->estado == "terminada")
            <option value="terminada" selected>Terminada</option>
            @else
            <option value="terminada">Terminada</option>
            @endif
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

