@extends('layouts.principal')

@section('main')

@section('title', 'Produtos')

@section('Aba_Produtos', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Produto</h2>
    </div>
    <div class="row">
        <h3>
          ID Produto: {{$produtos->idproduto}}
          <br>
          Nome Produto: {{$produtos->descricaoproduto}}
          <br>
          Valor: {{$produtos->valorproduto}}
        </h3>
    </div>
    
    <div class="row mt-5">
      <a href="{{route('produtos.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection