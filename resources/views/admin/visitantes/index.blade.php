@extends('adminlte::page')

@section('title', 'Visitantes')

@section('content_header')
    <h1>Visitantes</h1>
@stop

@section('content')
    <p>Lista de Visitantes</p>
    <div class="box-body" style="">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                </tr>
                </thead>
                <tbody>
                        @forelse($visitantes as $visitante)
                        <tr>
                            <td> {{$visitante->nome}}  </td>
                            <td> {{$visitante->cpf}}   </td>
                            <td> {{$visitante->rg}}    </td>
                            <td> {{$visitante->data_nascimento}} </td>
                            <td> {{$visitante->sexo}}  </td>
                        </tr>
                @empty
                        <p>Nenhum visitante cadastrado!</p>
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
@stop