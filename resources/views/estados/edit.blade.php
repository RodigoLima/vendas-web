@extends('layouts.principal')

@section('main')

@section('title', 'Estados')

@section('Aba_Estados', 'navbar-brand')

    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Estados</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('estados.update',$estados->idestado) }}" class="card p-2 my-4" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group">

                        <input value="{{ $estados->nomeestado }}" type="text" placeholder="Nome do Estado" class="form-control" name="nomeestado" required>
                        <input value="{{ $estados->sigla }}" type="text" placeholder="Sigla" class="form-control" name="sigla" required>
                    
                    </div>
                    
            </div>

        </div>
        @error('nomeestado')
            <div class="alert alert-danger my-2" role="alert">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        </form>

        <a href="{{ route('estados.index') }}" class="btn btn-secondary ml-1" role="button"
            aria-pressed="true">Cancelar</a>

    </div>
    </div>
    </div>

@endsection
