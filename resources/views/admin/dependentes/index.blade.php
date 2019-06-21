@extends('adminlte::page')

@section('title', 'Dependentes')

@section('content_header')
    <h1>Dependentes</h1>
@stop

@section('content')
    <p>Lista de Dependentes</p>
    <form action="{{ action('admin\DependentesController@search') }}" method="POST">
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