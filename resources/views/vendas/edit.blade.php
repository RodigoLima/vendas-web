@extends('layouts.principal')

@section('main')

@section('title', 'Vendas')

@section('Aba_Vendas', 'navbar-brand')

    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Vendas</h2>
        </div>
        <div class="row">
            <div class="col-md-12">

                <form action="{{ route('vendas.update',$vendas->idvenda) }}" class="card p-2 my-4" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                    <div class="input-group">

                        <select class="form-control" id="idcliente" name="idcliente" required>
                            <option hidden value="{{ $vendas->idcliente }}" selected="selected">
                                {{ $vendas->get_nome_cliente($vendas->idcliente) }}
                            </option>

                          
                            @foreach ($clientes as $c)
                                <option value="{{ $c->idcliente }}">
                                    {{ $c->nomecliente }}
                                </option>
                            @endforeach
                        </select>


                        <select class="form-control" id="idvendedor" name="idvendedor" required>
                            <option hidden value="{{ $vendas->idvendedor }}" selected="selected">
                                {{ $vendas->get_nome_vendedor($vendas->idvendedor) }}
                            </option>

                            @foreach ($vendedores as $v)
                                <option value="{{ $v->idvendedor }}">
                                    {{ $v->nomevendedor }}
                                </option>
                            @endforeach
                        </select>


                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group">

                    <select class="form-control" id="idproduto" name="idproduto" required>
                        <option hidden value="{{ $vendas->idproduto }}" selected="selected">
                            {{ $vendas->get_nome_produto_venda($vendas->idproduto) }}
                        </option>
                        @foreach ($produtos as $p)
                            <option value="{{ $p->idproduto }}">
                                {{ $p->descricaoproduto }}
                            </option>
                        @endforeach
                    </select>

                    <input value="{{ $vendas->quantidade }}" type="number" placeholder="Quantidade" class="form-control" name="quantidade" required>
                
                    <input value="{{ $vendas->datavenda }}" type="text" placeholder="Data da Venda" class="form-control" name="datavenda" onfocus="(this.type='date')" required>
                    


                </div>
            </div>

            </div>
            @error('idcliente')
                <div class="alert alert-danger my-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary">
                Salvar
            </button>
            </form>

            <a href="{{ route('vendas.index') }}" class="btn btn-secondary ml-1" role="button"
                aria-pressed="true">Cancelar</a>

        </div>
    </div>
    </div>

@endsection
