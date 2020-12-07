@extends('layouts.principal')

@section('main')

@section('title', 'Vendas')

@section('Aba_Vendas', 'navbar-brand')


<div class="container">
    <div class="py-5 text-center">
        <h2>Venda</h2>
    </div>
    <div class="row">
        <h3>
          ID Venda: {{$vendas->idvenda}}
          <br>
          Nome Cliente: {{$vendas->get_nome_cliente($vendas->idcliente)}}
          <br>
          ID Vendedor: {{$vendas->idvendedor}}
          <br>
          Nome Vendedor: {{$vendas->get_nome_vendedor($vendas->idvendedor)}}
          <br>
        </h3>
    </div>
    <div class="row">       
        <h3>
         Id Produto: {{$vendas->idproduto}}
         <br>
         Nome Produto: {{ $vendas->get_nome_produto_venda($vendas->idproduto) }}
         <br>
         Quantidade: {{$vendas->quantidade}}
         <br>
         Data da Venda: {{$vendas->datavenda}}
        </h3>          
    </div>

    <div class="row mt-5">
      <a href="{{route('vendas.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection