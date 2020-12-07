@extends('layouts.principal')

@section('main')

@section('title', 'Estados')

@section('Aba_Estados', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Estados</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('estados.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Novo Estado</a>
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

    @if(count($estados) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($estados as $e)
                <tr>
                    <th scope="row" id='idestado'> {{ $e->idestado }}  </th>
                    <td id='nomestado'>{{ $e->nomeestado }}</td>
                    <td id='sigla'>{{ $e->sigla }}</td>
                    <td>
                        <form action="{{ route('estados.destroy',  $e->idestado) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('estados.show',  $e->idestado)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('estados.edit', $e->idestado) }}">
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
