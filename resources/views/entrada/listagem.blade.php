@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2 class="text-center">Entradas</h2>

  <a href="{{action('EntradaController@novo')}}" class="btn btn-success pull-right" style="margin-top: 10px; margin-bottom: 10px;"> Lançar Entrada </a>

  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif

  <table id="listagem" class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Código Produto</th>
        <th>Foto</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Horário</th>
        <th>Quantidade</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $p)
        <tr>
          <td>{{ $p->codigo_produto }}</td>
          <td id="imagem">{!! $p->imagens ? "<img width=\"150\" src=\"$p->imagens\">" : 'Sem Foto' !!}</td>
          <td>{{ $p->descricao }}</td>
          <td>R${{ number_format($p->valor, 2, ',', '.') }}</td>
          <td>{{ date('d/m/Y', strtotime($p->created_at)) }}</td>
          <td>{{ date('H:i:s', strtotime($p->created_at)) }}</td>
          <td>{{ $p->quantidade }}</td>
          <td class="text-left">
            <a href="/ListarEntrada/mostrar/{{ $p->id_entrada }}" style="margin-right:5px"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="/ListarEntrada/remove/{{ $p->id_entrada }}}"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop