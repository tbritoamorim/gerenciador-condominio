@extends('adminlte::page')

@section('title', 'Condôminos')

@section('content_header')
    <h1>Condôminos</h1>
@stop

@section('content')
    <p>Editar Condômino</p>
<form class="form" method="POST" action="{{action('admin\CondominosController@update', $condomino->id)}}">
        Apartamento:
        <input type="text" name="apto" value="{{$condomino->apto}}">
        <br>
        Nome:
        <input type="text" name="nome" value="{{$condomino->nome}}">
        <br>
        Email:
        <input type="text" name="email" value="{{$condomino->email}}">
        <br>
        CPF:
        <input type="text" name="cpf" value="{{$condomino->cpf}}">
        <br>
        RG:
        <input type="text" name="rg" value="{{$condomino->rg}}">
        <br>
        Data de Nascimento:
        <input type="date" name="data_nascimento" value="{{$condomino->data_nascimento}}">
        <br>
        Sexo:
        <input type="radio" name="sexo" value="Feminino" @if(isset($condomino) && $condomino->sexo == "Feminino") checked @endif>Feminino
        <input type="radio" name="sexo" value="Masculino" @if(isset($condomino) && $condomino->sexo == "Masculino") checked @endif>Masculino
        <input type="radio" name="sexo" value="Outro" @if(isset($condomino) && $condomino->sexo == "Outro") checked @endif>Outro
        <br>
        Telefone Fixo:
        <input type="text" name="telefone_fixo" value="{{$condomino->telefone_fixo}}">
        <br>
        Celular:
        <input type="text" name="celular" value="{{$condomino->celular}}">
        <br>
        Vaga de Estacionamento:
        <input type="text" name="vaga_apto" value="{{$condomino->vaga_apto}}">
        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@stop