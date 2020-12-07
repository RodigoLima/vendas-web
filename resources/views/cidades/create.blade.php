@extends('layouts.principal')

@section('main')

@section('title', 'Cidades')

@section('Aba_Cidades', 'navbar-brand')



    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Cidades</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('cidades.store') }}" class="card p-2 my-4" method="POST">
                    @csrf
                    <div class="input-group">

                        <input type="text" placeholder="Nome da Cidade" class="form-control" name="nomecidade" required>

                        <select class="form-control" id="idestado" name="idestado" required>
                            <option value="" disabled selected>Nome do Estado</option>
                            @foreach ($estados as $e)
                                <option value="{{ $e->idestado }}">
                                    {{ $e->nomeestado }}
                                </option>
                            @endforeach
                        </select>

                    
                    </div>
                    
            </div>

        </div>
        @error('nomecidade')
            <div class="alert alert-danger my-2" role="alert">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        </form>

        <a href="{{ route('cidades.index') }}" class="btn btn-secondary ml-1" role="button"
            aria-pressed="true">Cancelar</a>

    </div>
    </div>
    </div>

@endsection
