@extends('layouts.principal')

@section('main')

@section('title', 'Profissões')

@section('Aba_Profissao', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Profissões</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('profissoes.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Nova Profissão</a>
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

    @if(count($profissoes) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($profissoes as $p)
                <tr>
                    <th scope="row" id='idprofissao'> {{ $p->idprofissao }}  </th>
                    <td id='descricaoprofissao'>{{ $p->descricaoprofissao }}</td>
                    <td>
                        <form action="{{ route('profissoes.destroy',  $p->idprofissao) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('profissoes.show',  $p->idprofissao)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('profissoes.edit', $p->idprofissao) }}">
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
