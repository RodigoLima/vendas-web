<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Profissoes;
use App\Models\Cidades;
use App\Models\Vendas;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::all(); 
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profissao = Profissoes::all(); 
        $cidades = Cidades::all();
        $clientes = Clientes::all();
        return view('clientes.create',compact('profissao','cidades','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "nomecliente.required"    => "O nome do cliente é obrigatório.",
                "idprofissao.required"    => "A indentificação da profissão é obrigatória.",
                "idcidade.required"    => "A indentificação da cidade é obrigatória.",
                "nascimento.required"    => "A data de nascimento é obrigatória.",
                "bairro.required"    => "O nome do bairro é obrigatório.",
                "rua.required"    => "O nome da rua é obrigatório.",
                "rendamensal.required"    => "A informação de renda mensal é obrigatória.",
            ]
        );


        $clientes = new Clientes;

        $clientes->nomecliente = $request->nomecliente;
        $clientes->idprofissao = $request->idprofissao;
        $clientes->idcidade = $request->idcidade;
        $clientes->nascimento = $request->nascimento;
        $clientes->bairro = $request->bairro;
        $clientes->rua = $request->rua;
        $clientes->rendamensal = $request->rendamensal;


        $clientes->save();

        return redirect()->route('clientes.index')
        ->with('msg_success', 'Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($idcliente)
    {
        $clientes = Clientes::find($idcliente);
        return view('clientes.show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($idcliente)
    {
        $clientes = Clientes::find($idcliente);
        $profissao = Profissoes::all(); 
        $cidades = Cidades::all();
        return view('clientes.edit', compact('clientes','profissao','cidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcliente)
    {

        $clientes = Clientes::find($idcliente);

        $request->validate(
            [
                "nomecliente.required"    => "O nome do cliente é obrigatório.",
                "idprofissao.required"    => "A indentificação da profissão é obrigatória.",
                "idcidade.required"    => "A indentificação da cidade é obrigatória.",
                "nascimento.required"    => "A data de nascimento é obrigatória.",
                "bairro.required"    => "O nome do bairro é obrigatório.",
                "rua.required"    => "O nome da rua é obrigatório.",
                "rendamensal.required"    => "A informação de renda mensal é obrigatória.",
            ]
        );

        $clientes->nomecliente = $request->nomecliente;
        $clientes->idprofissao = $request->idprofissao;
        $clientes->idcidade = $request->idcidade;
        $clientes->nascimento = $request->nascimento;
        $clientes->bairro = $request->bairro;
        $clientes->rua = $request->rua;
        $clientes->rendamensal = $request->rendamensal;


        $clientes->save();

        return redirect()->route('clientes.index')
        ->with('msg_success', 'Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcliente)
    {
        $clientes = Clientes::find($idcliente);
       
        $clientes->delete();

        return redirect()->route('clientes.index')
        ->with('msg_success', 'Cliente removido com sucesso'); 
    }
}
