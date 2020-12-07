@extends('layouts.principal')

@section('main')

@section('title', 'Clientes')

@section('Aba_Clientes', 'navbar-brand')


<div class="container">
    <div class="py-5 text-center">
        <h2>Clientes</h2>
    </div>
    <div class="row">
        <h3>
          ID Cliente: {{$clientes->idcliente}}
          <br>
          Nome Cliente: {{$clientes->nomecliente}}
          <br>
          Nascimento: {{$clientes->nascimento}}
          <br>
          Bairro: {{$clientes->bairro}}
          <br>
          Rua: {{$clientes->rua}}
          <br>
          Renda Mensal: {{$clientes->rendamensal}}
        </h3>
    </div>
    <div class="row">       
        <h3>
         Id Profisão: {{$clientes->idprofissao}}
         Nome Profissão: {{ $clientes->get_nome_profissao($clientes->idprofissao) }}
        </h3>          
    </div>

    <div class="row">       
      <h3>
       Id Cidade: {{$clientes->idcliente}}
       Nome Cidade: {{ $clientes->get_nome_cidade($clientes->idcidade) }}
      </h3>          
  </div>
    
    <div class="row mt-5">
      <a href="{{route('clientes.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection