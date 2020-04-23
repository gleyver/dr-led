@extends('layout.principal')
@section('conteudo')
<div class="container">
  <h2 class="text-center">Produtos</h2>

  <a href="{{action('ProdutoController@novo')}}" class="btn btn-success pull-right" style="margin-top: 10px; margin-bottom: 10px;">Cadastrar Produto</a>

  @if(session()->has('message.level'))
    <div class="alert alert-{{ session('message.level') }}"> 
      {!! session('message.content') !!}
    </div>
  @endif
    

  <table id="listagemProdutos" class="table table-striped table-hover table-hover">
    <thead>
      <tr>
        <th>Código Produto</th>
        <th>Foto</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Valor</th>
        <th>Entrada</th>
        <th>Saída</th>
        <th>Saldo</th>
        <th>Status</th>
        <th>Total</th>
        <th>Opções</th>
        <!-- <th>QR Code</th> -->
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $p)
        <tr>
          <td>{{ $p->codigo_produto }}</td>
          <td id="imagem">{!! $p->imagens ? "<img width=\"150\" src=\"$p->imagens\">" : 'Sem Foto' !!}</td>
          <td>{{ $p->descricao }}</td>
          <td>{{ $p->nome }}</td>
          <td>R${{ number_format($p->valor, 2, ',', '.') }}</td>
          <td>{{ $p->quantidadeEntrada ? $p->quantidadeEntrada : 0  }}</td>
          <td>{{ $p->quantidadeSaida ? $p->quantidadeSaida : 0 }}</td>
          <td>{{ $saldo = $p->quantidadeEntrada - $p->quantidadeSaida}}</td>
          <td>{{ $saldo == 0 ? "ESGOTADO": "DISPONÍVEL"}}</td>
          <td>R$ {{ $p->valor * $saldo}}</td>
          <td class="text-center">
            <a href="/Produtos/mostrar/{{ $p->id_produto }}" style="margin-right:5px"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="/Produtos/remove/{{ $p->id_produto }}}"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
          <!-- <td>{!! QrCode::size(150)->generate("purchasestore.com.br/".$p->id_produto); !!}</td> -->
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@stop