@extends('layouts.principal')

@section('main')

@section('title', 'Produtos')

@section('Aba_Produtos', 'navbar-brand')

    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Produtos</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('produtos.update', $produtos->idproduto) }}" class="card p-2 my-4" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group">

                        <input value="{{ $produtos->descricaoproduto }}" type="text" placeholder="Nome do Produto" class="form-control" name="descricaoproduto" required>
                        <input value="{{ $produtos->valorproduto }}" type="text" placeholder="Valor" class="form-control" name="valorproduto" required>
                    
                    </div>
                    
            </div>

        </div>
        @error('descricaoproduto')
            <div class="alert alert-danger my-2" role="alert">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        </form>

        <a href="{{ route('produtos.index') }}" class="btn btn-secondary ml-1" role="button"
            aria-pressed="true">Cancelar</a>

    </div>
    </div>
    </div>

@endsection
