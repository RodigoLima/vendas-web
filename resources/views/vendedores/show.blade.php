@extends('layouts.principal')

@section('main')

@section('title', 'Vendedores')

@section('Aba_Vendedores', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Vendedor</h2>
    </div>
    <div class="row">
        <h3>
          ID Vendedor: {{$vendedores->idvendedor}}
          <br>
          Nome: {{$vendedores->nomevendedor}}
          <br>
          Nascimento: {{$vendedores->nascimento}}
        </h3>
    </div>
    <div class="row">       
        <h3>
         ID Cidade: {{$vendedores->idcidade}}
         <br>
         Nome Cidade: {{ $vendedores->get_nome_cidade_vendedor($vendedores->idcidade) }}
        </h3>          
    </div>
    
    <div class="row mt-5">
      <a href="{{route('vendedores.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection