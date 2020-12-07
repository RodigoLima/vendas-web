@extends('layouts.principal')

@section('main')

@section('title', 'Produtos')

@section('Aba_Produtos', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Produtos</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('produtos.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Novo Produto</a>
        </div>
    </div>

    @if (session('msg_success'))
    <div class="alert alert-success" role="alert">
        {{ session('msg_success') }}
    </div>
    @endif

    @if (session('msg_error'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg_error') }}
    </div>
    @endif

    @if(count($produtos) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($produtos as $p)
                <tr>
                    <th scope="row" id='idproduto'> {{ $p->idproduto }}  </th>
                    <td id='descricaoproduto'>{{ $p->descricaoproduto }}</td>
                    <td id='valorproduto'>{{ $p->valorproduto }}</td>
                    <td>
                        <form action="{{ route('produtos.destroy',  $p->idproduto) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('produtos.show',  $p->idproduto)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('produtos.edit',$p->idproduto) }}">
                                Editar
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach
               
                

            </tbody>
            </table>

        </div>
    </div>
    @endif

    
</div>

@endsection
