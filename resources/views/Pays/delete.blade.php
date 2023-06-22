@extends('layouts.base')
@section('titulo','Eliminar el pago')
@section("botonera")
<a href="{{ route('pays.index') }}" class="btn btn-success">Regresar a los pagos</a>
@endsection

@section('contenido')

<div class="text-center">
    <h3 class="text-center text-danger">
        ¿Está seguro de eliminar el pago?
    </h3>
    <form action="{{ route('pays.destroy',['pay' => $pay->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
    </form>
</div>

@endsection
