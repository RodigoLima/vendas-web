@extends('layouts.principal')

@section('main')

@section('title', 'Clientes')

@section('Aba_Clientes', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Clientes</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('clientes.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Novo Cliente</a>
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

    @if(count($clientes) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Profissão</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($clientes as $c)
                <tr>
                    <th scope="row" id='idcliente'> {{ $c->idcliente }}  </th>
                    <td id='nomecliente'>{{ $c->nomecliente }}</td>
                    <td id='nomeprofissao'>{{ $c->get_nome_profissao($c->idprofissao) }}</td>
                    <td>
                        <form action="{{ route('clientes.destroy',  $c->idcliente) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('clientes.show',  $c->idcliente)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('clientes.edit', $c->idcliente) }}">
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
