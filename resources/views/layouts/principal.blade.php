<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>@yield('title')</title>

  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a style="color: #ffffff"   class=" nav-link : @yield('Aba_Home')" href="{{ '/' }}">Home</a>
                </li>

                <li class="nav-item">
                    <a style="color: #ffffff" class=" nav-link : @yield('Aba_Profissao')" href="{{ route('profissoes.index') }}">Profissões</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff"    class="nav-link : @yield('Aba_Clientes')" href="{{ route('clientes.index') }}">Clientes</span></a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff"    class="nav-link : @yield('Aba_Vendas')" href="{{ route('vendas.index') }}">Vendas</a>
                </li>
                <li class="nav-item">
                    <a  style="color: #ffffff"   class="nav-link : @yield('Aba_Vendedores')" href="{{ route('vendedores.index') }}">Vendedores</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff"    class="nav-link : @yield('Aba_Estados')" href="{{ route('estados.index') }}">Estados</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff"    class="nav-link : @yield('Aba_Produtos')" href="{{ route('produtos.index') }}">Produtos</a>
                </li>
                <li class="nav-item">
                    <a style="color: #ffffff"    class="nav-link : @yield('Aba_Cidades')" href="{{ route('cidades.index') }}">Cidades</a>
                </li>
            </ul>
            <span class="navbar-text">
            </span>
        </div>
    </nav>  
    

    <main role="main">
        @yield('main')
    </main>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    

  </body>
</html>
