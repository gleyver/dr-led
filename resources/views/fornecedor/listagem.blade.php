@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2 class="text-center">Fornecedores</h2>
  <a href="{{action('FornecedorController@novo')}}" class="btn btn-success pull-right" style="margin-top: 10px; margin-bottom: 10px;"> Cadastrar Fornecedor </a>

  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Fornecedor</th>
        <th>Celular</th>
        <th>E-Mail</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fornecedores as $f)
        <tr>
          <td>{{ $f->id_fornecedor }}</td>
          <td>{{ $f->nome_loja }}</td>
          <td>{{ $f->celular }}</td>
          <td>{{ $f->email }}</td>
          <td class="text-left">
            <a href="/ListarFornecedor/mostrar/{{ $f->id_fornecedor }}" style="margin-right:5px"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="/ListarFornecedor/remove/{{ $f->id_fornecedor }}}"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop