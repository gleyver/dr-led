@extends('layout.principal')
@section('conteudo')

<form class="form-horizontal" method="post" action="/LancarEntrada/edita/{{$e->id_entrada}}">
    <fieldset>

    <!-- Form Name -->
    <legend class="text-center">Edita entrada</legend>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="produto">Código/Nome do Produto</label>
        <div class="col-md-4">
            <select id="categoria" name="fk_produto" class="form-control">
                @foreach($produtos as $p)
                    @if($p->id_produto == $e->fk_produto)
                        <option value="{{ $p->id_produto}}" selected disabled>{{ $p->descricao}}</option>
                    @else
                        <option value="{{ $p->id_produto}}" disabled>{{ $p->descricao}}</option> 
                    @endif    
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="quantidade">Data Saída</label>  
        <div class="col-md-4">
            <input name="created_at" id="datetime" type="datetime-local" value="{{ date('Y-m-d\TH:i:s', strtotime($e->created_at)) }}" class="form-control input-md" required>
        </div>
        <div onclick="inserirHoraAtual()" class="btn btn-success">INCLUIR HORÁRIO ATUAL</div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="quantidade">Quantidade</label>  
        <div class="col-md-4">
            <input id="valor" name="quantidade" value="{{ $e->quantidade}}" type="text" placeholder="Insira quantidade do produto" class="form-control input-md" required>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="salvar"></label>
        <div class="col-md-4">
          <button class="btn btn-success">SALVAR</button>
        </div>
    </div>

    </fieldset>
</form>



@stop