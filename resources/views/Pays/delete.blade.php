@extends('layouts.base')
@section('titulo','ELIMINAR PAGO')

@section('contenido')

    <section>
        <div>
            <div class="text-center">
                <h3 class="text-center text-danger">
                    ¿Está seguro de eliminar su pago?
                </h3>
                <form action="{{ route('pays.destroy',['pay' => $pay->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
                <a href="{{ route('pays.index') }}" class="btn btn-success">Regresar</a>
                </form>
            </div>
        </div>
    </section>

@endsection
