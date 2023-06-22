@extends('layouts.base')
@section('titulo', 'Pays')
@section('botonera')

    <a href="{{ route('pays.create') }}" class="btn btn-primary">Nueva Tarea</a>

@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            @csrf
            <thead>
                <tr>
                    <td>ID</td>
                    <td>credit_num</td>
                    <td>due_date</td>
                    <td>segurity_code</td>
                    <td>amount_paid</td>
                    <td>descripcion</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pays as $pay)
                    <tr>
                        <td>
                            {{ $pay->id }}
                        </td>
                        <td>
                            {{ $pay->credit_num }}
                        </td>
                        <td>
                            {{ $pay->due_date }}
                        </td>
                        <td>
                            {{ $pay->project->nombre }}
                        </td>
                        <td>
                            {{ $pay->segurity_code }}
                        </td>
                        <td>
                            {{ $pay->amount_paid }}
                        </td>
                        <td>
                            {{ $pay->description }}
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('pay.edit',['pay'=>$pay->id]) }}" class="btn btn-warning" style="margin-left: 10px">Editar</a>
                                <a href="{{ route('pay.delete',['pay'=>$pay->id]) }}" class="btn btn-danger" style="margin-left: 10px">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
