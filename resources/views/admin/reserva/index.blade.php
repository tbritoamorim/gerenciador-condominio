@extends('adminlte::page')

@section('title', 'Reservas')

@section('content_header')
    <h1>Reservas</h1>
@stop

@section('content')
    <p>Lista de Reservas</p>
    <form action="{{ action('admin\ReservaController@search') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="q" placeholder="Pesquisar..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
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