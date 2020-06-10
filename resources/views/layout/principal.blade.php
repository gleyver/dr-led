<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.simplo7.net/static/17741/configuracao/favicon.png" type="image/x-icon" rel="shortcut icon" />
        <!-- <link rel="stylesheet" href="{{URL::asset('bootstrap/css/bootstrap.min.css')}}"> -->
        <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="/css/app.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> --}}
        <!-- <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="/css/personal.css"> -->
        
        <meta name="viewport" content="width=device-width">

    	<title>Controle de Estoque Dr Led</title>
    </head>
    <body class="bg-light">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('Pagina inicial') }}">Dr Led</a>
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="{{ route('Listar Produtos') }}" class="nav-link"> Produtos </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Categorias') }}" class="nav-link"> Categorias </a>
                    </li>  
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Destaques <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="{{ route('Listar Destaques') }}">Listar Destaques</a></li>
                          <li><a href="{{ route('Listar GrupoProdutos') }}">Listar Grupo Produtos</a></li>
                        </ul>
                    </li>    
                    <li class="dropdown">
                        <a href="{{ route('Listar Entradas') }}" class="nav-link"> Entradas </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Saidas') }}" class="nav-link"> Saidas </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Vendas') }}" class="nav-link"> Vendas </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Clientes') }}" class="nav-link"> Clientes </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Relatorios') }}" class="nav-link"> Relatorios </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('Listar Fornecedores') }}" class="nav-link"> Fornecedor </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
      </nav>
        
        @yield('conteudo')

        <footer class="bs-footer" role="contentinfo">
            <div class="container">
                <p></p>
            </div>
        </footer>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/sorting/date-uk.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment.min.js"></script>
        <script type="text/javascript" src="/js/scripts.js"></script>
    </body>
</html>