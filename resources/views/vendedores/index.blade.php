@extends('layouts.principal')

@section('main')

@section('title', 'Vendedores')

@section('Aba_Vendedores', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Vendedores</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('vendedores.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Novo Vendedor</a>
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

    @if(count($vendedores) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Vendedor</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($vendedores as $v)
                <tr>
                    <th scope="row" id='idvenda'> {{ $v->idvendedor }}  </th>
                    <td id='nomecliente'>{{ $v->nomevendedor }}</td>
                    <td id='nomevendedor'>{{ $v->get_nome_cidade_vendedor($v->idcidade) }}</td>
                    <td>
                        <form action="{{ route('vendedores.destroy',  $v->idvendedor) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('vendedores.show',  $v->idvendedor)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('vendedores.edit', $v->idvendedor) }}">
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
