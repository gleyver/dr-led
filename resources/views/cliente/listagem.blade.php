@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2 class="text-center">Clientes</h2>
  
  <a href="{{action('ClienteController@novo')}}" class="btn btn-success pull-right" style="margin-top: 10px; margin-bottom: 10px;"> Cadastrar Cliente </a>
  
  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Cliente</th>
        <th>CPF</th>
        <th>Celular</th>
        <th>E-Mail</th>
        <th>Data de inclusão</th>
        <th>Horário</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      @foreach($clientes as $c)
        <tr>
          <td>{{ $c->id_clientes }}</td>
          <td>{{ $c->nome }}</td>
          <td>{{ $c->cpf }}</td>
          <td>{{ $c->celular }}</td>
          <td>{{ $c->email }}</td>
          <td>{{ date('d/m/Y', strtotime($c->created_at)) }}</td>
          <td>{{ date('H:i:s', strtotime($c->created_at)) }}</td>
          <td class="text-left">
            <a href="/ListarCliente/mostrar/{{ $c->id_clientes }}" style="margin-right:5px"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="/ListarCliente/remove/{{ $c->id_clientes }}}"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop