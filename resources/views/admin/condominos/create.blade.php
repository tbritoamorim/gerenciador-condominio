@extends('adminlte::page')

@section('title', 'Condôminos')

@section('content_header')
    <h1>Condôminos</h1>
@stop

@section('content')
    <p>Adicionar/Editar Condômino</p>
    <form action="">
        Apartamento:
        <input type="text" name="apto">
        <br>
        Nome:
        <input type="text" name="nome">
        <br>
        Email:
        <input type="text" name="email">
        <br>
        CPF:
        <input type="text" name="cpf">
        <br>
        RG:
        <input type="text" name="rg">
        <br>
        Data de Nascimento:
        <input type="date" name="data_nascimento">
        <br>
        Sexo:
        <input type="radio" name="sexo" value="Feminino">
        <input type="radio" name="sexo" value="Masculino">
        <input type="radio" name="sexo" value="Outro">
        <br>
        Telefone Fixo:
        <input type="text" name="telefone_fixo">
        <br>
        Celular:
        <input type="text" name="celular">
        <br>
        Vaga de Estacionamento:
        <input type="text" name="vaga_apto">
    </form>
@stop