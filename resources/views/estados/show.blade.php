@extends('layouts.principal')

@section('main')

@section('title', 'Estados')

@section('Aba_Estados', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Estado</h2>
    </div>
    <div class="row">
        <h3>
          ID Estado: {{$estados->idestado}}
          <br>
          Nome: {{$estados->nomeestado}}
          <br>
          Sigla: {{$estados->sigla}}
        </h3>
    </div>
    
    <div class="row mt-5">
      <a href="{{route('estados.index')}}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection