@extends('layouts.principal')

@section('main')

@section('title', 'Profissões')

@section('Aba_Profissao', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Profissão</h2>
    </div>
    <div class="row">
        <h3>
          ID: {{$profissao->idprofissao}}
        </h3>
    </div>
    <div class="row">       
        <h3>
          Nome: {{$profissao->descricaoprofissao}}
        </h3>          
    </div>
    
    <div class="row mt-5">
      <a href="{{route('profissoes.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection