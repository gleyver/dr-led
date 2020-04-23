@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h1 class="text-center">Listagem Módulos</h1>     
  <div class="row">
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Venda</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Cadastrar Venda') }}">Cadastrar Venda</a>
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Vendas') }}">Listar Vendas</a>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail" style="background-color: #4169E1; color: white;">
        <h2 class="text-center"> Produto</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Produtos') }}">Listar Produtos</a>
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Cadastrar Produto') }}">Cadastrar Produto</a>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Destaque</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Destaques') }}">Listar Destaques</a>
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar GrupoProdutos') }}">Listar Grupo Produto</a>
        </div>
      </div>
    </div>   
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Entrada</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Cadastrar Entrada') }}">Cadastrar Entrada</a>
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Entradas') }}">Listar Entradas</a>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Saída</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Saidas') }}">Listar Saídas</a>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Cliente</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Cadastrar Cliente') }}">Cadastrar Cliente</a>
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Clientes') }}">Listar Clientes</a>
        </div>
      </div>
    </div>    
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail"  style="background-color: #4169E1; color: white;">
        <h2 class="text-center">Relatório</h2>
        <div class="list-group">
          <a class="list-group-item list-group-item-action list-group-item-primary" href="{{ route('Listar Relatorios') }}">Listar Relatorios</a>
        </div>
      </div>
    </div>
  </div> 
</div>
@stop