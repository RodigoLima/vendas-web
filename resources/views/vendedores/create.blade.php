@extends('layouts.principal')

@section('main')

@section('title', 'Vendedores')

@section('Aba_Vendedores', 'navbar-brand')



    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Vendedores</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('vendedores.store') }}" class="card p-2 my-4" method="POST">
                    @csrf
                    <div class="input-group">

                        <input type="text" placeholder="Nome do Vendedor" class="form-control" name="nomevendedor" required>

                        <input type="text" placeholder="Data de Nascimento" class="form-control" name="nascimento"
                            onfocus="(this.type='date')" required>

                        <div class="form-group">

                            <select class="form-control" id="idcidade" name="idcidade" required>
                                <option value="" disabled selected>Nome da Cidade</option>
                                @foreach ($cidades as $c)
                                    <option value="{{ $c->idcidade }}">
                                        {{ $c->nomecidade }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    
            </div>

        </div>
        @error('nomevendedor')
            <div class="alert alert-danger my-2" role="alert">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        </form>

        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary ml-1" role="button"
            aria-pressed="true">Cancelar</a>

    </div>
    </div>
    </div>

@endsection
