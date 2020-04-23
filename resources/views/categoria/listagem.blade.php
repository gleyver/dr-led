@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2 class="text-center">Categorias</h2>    
  
  <a href="{{action('CategoriaController@novo')}}" class="btn btn-success pull-right" style="margin-top: 10px; margin-bottom: 10px;">  Cadastrar Categoria </a>
  
  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nome Categoria</th>
        <th>Editar Categoria</th>
        <th>Remover Categoria</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categorias as $c)
        <tr>
          <td>{{ $c->id_categoria }}</td>
          <td>{{ $c->nome }}</td>
          <td><a href="/ListarCategoria/mostrar/{{ $c->id_categoria }}"><span class="glyphicon glyphicon-pencil"></span></a></td>
          <td><a href="/ListarCategoria/remove/{{ $c->id_categoria }}"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>     

      @endforeach
    </tbody>
  </table>
</div>
@stop