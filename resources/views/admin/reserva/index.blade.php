@extends('adminlte::page')

@section('title', 'Reservas')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')
    <p>Lista de Reservas</p>
    <div class="box-body">
            <div class="table-responsive">
                    <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ID Condômino</th>
                                    <th>Local</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            @forelse( $reservas as $reserva)
                                <tr>
                                    <td>{{$reserva->condomino_id}}</td>
                                    <td>{{$reserva->local}}</td>
                                    <td>{{$reserva->data_hora}}</td>
                                </tr>
                             @empty
                                <p> Nenhuma reserva cadastrada. </p>
                            @endforelse
                            </tbody>
                            
                        </table>
            </div>
        </div>
@stop