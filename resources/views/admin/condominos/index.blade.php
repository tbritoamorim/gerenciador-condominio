@extends('adminlte::page')

@section('title', 'Condôminos')

@section('content_header')
    <h1>Condôminos</h1>
@stop

@section('content')
    <p>Lista de Condôminos</p>
    <form action="{{ action('admin\CondominosController@create') }}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary" style="float:right;"><i class="ion ion-person-add"></i></button>
    </form>
    <form action="{{ action('admin\CondominosController@search') }}" method="POST">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="q" placeholder="Pesquisar..." class="form-control">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
    <div class="box-body" style="">
            <div class="table-responsive">
              <table class="table no-margin">
                <thead> 
                <tr>
                    <th>Apto</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Nascimento</th>
                    <th>Sexo</th>
                    <th>Tel Fixo</th>
                    <th>Celular</th>
                    <th>Vaga</th>  
                </tr>
                </thead>
                <tbody>
                        @forelse($condominos as $condomino)
                        <tr>
                            <td> {{$condomino->apto}}  </td>
                            <td> {{$condomino->nome}}  </td>
                            <td> {{$condomino->email}} </td>
                            <td> {{$condomino->cpf}}   </td>
                            <td> {{$condomino->rg}}    </td>
                            <td> {{$condomino->data_nascimento}} </td>
                            <td> {{$condomino->sexo}}  </td>
                            <td> {{$condomino->telefone_fixo}}   </td>
                            <td> {{$condomino->celular}}         </td>
                            <td> {{$condomino->vaga_apto}} </td>
                            <td>
                                <a href="" class="actions edit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                            </td>
                        </tr>
                
                @empty
                        <p>Nenhum condômino cadastrado!</p>
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
@stop