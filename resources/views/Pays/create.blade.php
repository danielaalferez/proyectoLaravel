@extends('layouts.base')
@section('titulo',"FORMULARIO DE PAGOS")


@section('contenido')
    <section style="background-color: #e3f2fd; width: 1200px; height: 720px;">
        <div class="container" style="border: 2px solid black; width: 700px; height: 670px; background-color: white; margin-top: 30px;">
        <form action="{{ route('pays.store') }}" method="POST" style="margin-top: 10px;">
    @csrf
    <div class="mb-3">
        <label for="project_id" class="form-label">Nombre</label>
        <Select name="project_id" id="project_id" class="form-control" required>
            <option value="">--seleccione</option>
            @foreach( $projects as $project)
            <option value="{{$project->id}}">{{ $project->name}}</option>
            @endforeach
        </Select>
    </div>
    <div class="mb-3">
        <label for="project_id" class="form-label">Documento</label>
        <Select name="project_id" id="project_id" class="form-control" required>
            <option value="">--seleccione</option>
            @foreach( $projects as $project)
            <option value="{{$project->id}}">{{ $project->documento}}</option>
            @endforeach
        </Select>
    </div>
    <div class="mb-3">
        <label for="credit_num" class="form-label"><b>Numero de la Tarjeta</b></label>
        <input type="text" class="form-control" id="credit_num" name="credit_num">
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label"><b>Fecha de Vencimiento</b></label>
        <input type="text" class="form-control" id="due_date" name="due_date">
    </div>
    <div class="mb-3">
        <label for="segurity_code" class="form-label"><b>Codigo de Seguridad (CVV)</b></label>
        <input type="text" class="form-control" id="segurity_code" name="segurity_code">
    </div>
    <div class="mb-3">
        <label for="amount_paid" class="form-label"><b>Monto a Pagar</b></label>
        <input type="text" class="form-control" id="amount_paid" name="amount_paid">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label"><b>Descripción del pago</b></label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
 

    <button type="submit" class="btn btn-primary">Crear</button>
    <a href="{{ route('pays.index') }}" class="btn btn-success">Regresar</a>
    </form>
        </div>
    </section>


@endsection

@section('scripts')

@endsection
