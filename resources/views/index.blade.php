@extends('layouts.principal')

@section('main')

@section('title', 'Home')

@section('Aba_Home', 'navbar-brand')

<div class="container">
  <div class="py-5 text-center">
    <h2></h2>
  </div>
  <div class="row">

    <div class="col-md-4" >
      <h3>Profissões</h3>
      @foreach ($profissoes->slice(0, 5) as $p)

      <h6>{{ $p->idprofissao . ' - ' . $p->descricaoprofissao}}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Clientes</h3>
      @foreach ($clientes->slice(0, 5) as $cli)

      <h6>{{ $cli->idcliente . ' - ' . $cli->nomecliente}}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Cidades</h3>
      @foreach ($cidades->slice(0, 5) as $cid)

      <h6>{{ $cid->idcidade . ' - ' . $cid->nomecidade}}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Vendas</h3>
      @foreach ($vendas->slice(0, 5) as $venda)

      <h6>{{ $venda->idvenda . ' - Produto: ' . $venda->get_nome_produto_venda($venda->idproduto)  . ' - Quantidade: ' . $venda->quantidade }}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Vendedores</h3>
      @foreach ($vendedores->slice(0, 5) as $vend)

      <h6>{{ $vend->idvendedor . ' - ' . $vend->nomevendedor}}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Estados</h3>
      @foreach ($estados->slice(0, 5) as $est)

      <h6>{{ $est->idestado . ' - ' . $est->nomeestado}}</h6>

      @endforeach 
    </div>

    <div class="col-md-4" >
      <h3>Produtos</h3>
      @foreach ($produtos->slice(0, 5) as $prod)

      <h6>{{ $prod->idproduto . ' - ' . $prod->descricaoproduto}}</h6>

      @endforeach 
    </div>


  </div>
</div>



@endsection
