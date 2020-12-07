@extends('layouts.principal')

@section('main')

@section('title', 'Profissões')

@section('Aba_Profissao', 'navbar-brand')


<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Profissões</h2>
    </div>
    <div class="row">
        <div class="col-md-12" >

            <form action="{{ route('profissoes.store') }}" class="card p-2 my-4" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" placeholder="Nome da Profissão" 
                        class="form-control" name="descricaoprofissao" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>
                    </div>
                </div>
                @error("descricaoprofissao")
                <div class="alert alert-danger my-2" role="alert">
                    {{$message}}
                </div>
                @enderror                
            </form>
            <a href="{{route('profissoes.index')}}" 
            class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar</a>

        </div>
    </div>
</div>

@endsection