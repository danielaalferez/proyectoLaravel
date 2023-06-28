@extends('layouts.base')
@section('titulo','ELIMINAR PAGO')

@section('contenido')

    <section style="background-color: #e3f2fd; width: 1200px; height: 360px;">
        <div class="container" style="border: 2px solid black; width: 700px; height: 300px; background-color: white; margin-top: 30px;">
            <div class="text-center">
                <h3 class="text-center text-danger" style="margin-top: 100px;">
                    ¿Está seguro de eliminar su pago?
                </h3>
                <form action="{{ route('pays.destroy',['pay' => $pay->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger mt-3">Eliminar</button>
                <a href="{{ route('pays.index') }}" class="btn btn-success" style="margin-top: 15px;">Regresar</a>
                </form>
            </div>
        </div>
    </section>

@endsection
