@extends('layouts.principal')

@section('main')

@section('title', 'Clientes')

@section('Aba_Clientes', 'navbar-brand')



    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Clientes</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('clientes.update', $clientes->idcliente) }}" class="card p-2 my-4" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="input-group">
                        <input type="text" value="{{ $clientes->nomecliente }}" placeholder="Nome do Cliente"
                            class="form-control" name="nomecliente" required>

                        <div class="form-group">


                            <select class="form-control" id="idprofissao" name="idprofissao" required>

                                <option hidden value="{{ $clientes->idprofissao }}" selected="selected">
                                    {{ $clientes->get_nome_profissao($clientes->idprofissao) }}
                                </option>

                                @foreach ($profissao as $p)
                                    <option value="{{ $p->idprofissao }}">
                                        {{ $p->descricaoprofissao }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="input-group">

                        <div class="form-group">

                            <select class="form-control" id="idcidade" name="idcidade" required>
                               
                                <option hidden value="{{ $clientes->idcidade }}" selected="selected">
                                    {{ $clientes->get_nome_cidade($clientes->idcidade) }}
                                </option>

                                @foreach ($cidades as $c)
                                    <option value="{{ $c->idcidade }}">
                                        {{ $c->nomecidade }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <input type="text" value="{{ $clientes->nascimento }}" placeholder="Data de Nascimento"
                            class="form-control" name="nascimento" onfocus="(this.type='date')" required>


                    </div>

                    <div class="input-group">
                        <input type="text" value="{{ $clientes->bairro }}" placeholder="Bairro" class="form-control"
                            name="bairro" required>

                        <input type="text" value="{{ $clientes->rua }}" placeholder="Rua" class="form-control" name="rua"
                            required>

                        <input type="number" value="{{ $clientes->rendamensal }}" placeholder="Renda Mensal"
                            class="form-control" name="rendamensal" required>
                    </div>

                
            </div>

        </div>
        @error('nomecliente')
            <div class="alert alert-danger my-2" role="alert">
                {{ $message }}
            </div>
        @enderror
        <button type="submit" class="btn btn-primary">
            Salvar
        </button>
        </form>

        <a href="{{ route('clientes.index') }}" class="btn btn-secondary ml-1" role="button"
            aria-pressed="true">Cancelar</a>

    </div>
    </div>
    </div>

@endsection
