@extends('layouts.principal')

@section('main')

@section('title', 'Cidades')

@section('Aba_Cidades', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cidade</h2>
    </div>
    <div class="row">
        <h3>
          ID Cidades: {{$cidades->idcidade}}
          <br>
          Nome Cidade: {{$cidades->nomecidade}}
          <br>
          ID Estado: {{$cidades->idestado}}
          <br>
          Nome Estado: {{$cidades->get_nome_estado($cidades->idestado)}}
        </h3>
    </div>
    
    <div class="row mt-5">
      <a href="{{route('cidades.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection