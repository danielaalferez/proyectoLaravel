@extends('layouts.base')
@section('titulo',"FORMULARIO DE PAGOS")
@section("botonera")
<a href="{{ route('projects.index') }}" class="btn btn-success">Regresar a Pagos</a>
@endsection

@section('contenido')

<form action="{{ route('pays.store') }}" method="POST">
    @csrf
   
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="code" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="code" name="code">
    </div>
    <div class="mb-3">
        <label for="credit_num" class="form-label">credit number</label>
        <input type="text" class="form-control" id="credit_num" name="credit_num">
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label">due date</label>
        <input type="text" class="form-control" id="due_date" name="due_date">
    </div>
    <div class="mb-3">
        <label for="segurity_code" class="form-label"> segurity code</label>
        <input type="text" class="form-control" id="segurity_code" name="segurity_code">
    </div>
    <div class="mb-3">
        <label for="amount_paid" class="form-label"> pago monto</label>
        <input type="text" class="form-control" id="amount_paid" name="amount_paid">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div class="mb-3">
        <label for="project_id" class="form-label">Proyecto</label>
        <Select name="project_id" id="project_id" class="form-control" required>
            <option value="">--seleccione</option>
            @foreach(projects as project)
            <option value="{{$project->id}}"></option>

        </Select>
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection

@section('scripts')

@endsection
