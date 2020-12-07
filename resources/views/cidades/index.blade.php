@extends('layouts.principal')

@section('main')

@section('title', 'Cidades')

@section('Aba_Cidades', 'navbar-brand')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Cidades</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('cidades.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Nova Cidade</a>
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

    @if(count($cidades) > 0)
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Cidade</th>
                    <th scope="col">Nome Estado</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cidades as $c)
                <tr>
                    <th scope="row" id='idcidade'> {{ $c->idcidade }}  </th>
                    <td id='nomecidade'>{{ $c->nomecidade }}</td>
                    <td id='nomeestado'>{{ $c->get_nome_estado($c->idestado) }}</td>
                    <td>
                        <form action="{{ route('cidades.destroy',   $c->idcidade) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{  route('cidades.show',   $c->idcidade)  }}">
                                Detalhes
                            </a>

                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('cidades.edit',  $c->idcidade) }}">
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
