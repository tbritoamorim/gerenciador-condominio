@extends('adminlte::page')

@section('title', 'Dependentes')

@section('content_header')
    <h1>Dependentes</h1>
@stop

@section('content')
    <p>Lista de Dependentes</p>
    <div class="box-body">
        <div class="table-responsive">
                <table class="table no-margin">
                        <thead>
                            <tr>
                                <th>Apto</th>
                                <th>Nome</th>
                                <th>Parentesco</th>
                                <th>Data de nascimento</th>
                                <th>RG</th>
                                <th>CPF</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @forelse( $dependentes as $dependente)
                            <tr>
                                <td>{{$dependente->apto}}</td>
                                <td>{{$dependente->nome}}</td>
                                <td>{{$dependente->parentesco}}</td>
                                <td>{{$dependente->data_nascimento}}</td>
                                <td>{{$dependente->rg}}</td>
                                <td>{{$dependente->cpf}}</td>
                            </tr>
                         @empty
                            <p> Nenhum dependente cadastrado. </p>
                        @endforelse
                        </tbody>
                        
                    </table>
        </div>
    </div>
@stop