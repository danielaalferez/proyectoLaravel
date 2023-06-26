@extends('layouts.base')
@section('titulo', 'Pagos')
@section('botonera')

    <a href="{{ route('pays.create') }}" class="btn btn-primary">Pague Aqui</a>

@endsection

@section('contenido')

    <div class="tabla-lista">
        <table class="table table-bordered table-hover">
            @csrf
            <thead>
                <tr>
                    <td style="text-align:center"><b>ID</b></td>
                    <td style="text-align:center"><b>Nombre</b></td>
                    <td style="text-align:center"><b>Documento</b></td>
                    <td style="text-align:center"><b>Cantidad Pagada</b></td>
                    <td style="text-align:center"><b>Descripción Pago</b></td>
                    <td style="text-align:center"><b>Acciones</b></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($pays as $pay)
                    <tr>
                        <td>
                            {{ $pay->id }}
                        </td>
                        <td>
                            {{ $pay->project->nombre }}
                        </td>
                        <td>
                            {{ $pay->project->documento }}
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
