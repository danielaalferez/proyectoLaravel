@extends('layouts.base')
@section('titulo',"EDITAR PAGO")

@section('contenido')

    <section style="background-color: #e3f2fd; width: 1200px; height: 500px;">
    <div class="container" style="border: 2px solid black; width: 650px; height: 420px; background-color: white; margin-top: 30px;">
        <form action="{{ route('pays.update',['pay'=>$pay->id]) }}" method="POST" style="margin-top: 10px">
        @csrf
        @method('put')
    
    <div class="mb-3">
        <label for="credit_num" class="form-label"><b>Numero Tarjeta Credito/Debitp</b></label>
        <input type="text" class="form-control" id="credit_num" name="credit_num" value="{{ $pay->credit_num }}">
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label"><b>Fecha vencimiento</b></label>
        <input type="text" class="form-control" id="due_date" name="due_date" value="{{ $pay->due_date }}">
    </div>
    <div class="mb-3">
        <label for="segurity_code" class="form-label"><b>Codigo Seguridad</b></label>
        <input type="text" class="form-control" id="segurity_code" name="segurity_code" value="{{ $pay->segurity_code }}">
    </div>
    <div class="mb-3">
        <label for="amount_paid" class="form-label"><b>Monto a Pagar</b></label>
        <input type="text" class="form-control" id="amount_paid" name="amount_paid" value="{{ $pay->amount_paid }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label"><b>Descripcion</b></label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $pay->description }}">
    </div>
    <div class="mb-3">
    <label for="project_id" class="form-label">Proyecto</label>
    <select name="project_id" id="project_id" class="form-control" required>
        @foreach ($projects as $project)
            @if($pay->project_id == $project->id)
                <option value="{{ $project->id }}" selected>{{ $project->name }}</option>
            @else
                <option value="{{ $project->id }}">{{ $project->name }}</option>
            @endif
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ route('projects.index') }}" class="btn btn-success">Regresar</a>
</form>
    </div>
    </section>
</div>
@endsection



    

    