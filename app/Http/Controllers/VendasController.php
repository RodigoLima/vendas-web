<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use App\Models\Clientes;
use App\Models\Produtos;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Vendas::all(); 
        return view('vendas.index', compact('vendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        $produtos =  Produtos::all();
        $vendedores = Vendedores::all();
        return view('vendas.create',compact('clientes','produtos' , 'vendedores'));
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
                "idcliente.required"    => "O nome do cliente é obrigatório.",
                "idvendedor.required"    => "A indentificação do vendedor é obrigatória.",
                "idproduto.required"    => "A indentificação do produto é obrigatória.",
                "quantidade.required"    => "A quantidade é obrigatória.",
                "datavenda.required"    => "A data de venda é obrigatória.",
            ]
        );


        $vendas = new Vendas;

        $vendas->idcliente = $request->idcliente;
        $vendas->idvendedor = $request->idvendedor;
        $vendas->idproduto = $request->idproduto;
        $vendas->quantidade = $request->quantidade;
        $vendas->datavenda = $request->datavenda;


        $vendas->save();

        return redirect()->route('vendas.index')
        ->with('msg_success', 'Venda realizada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function show($idvenda)
    {
        $vendas = Vendas::find($idvenda);
        return view('vendas.show', compact('vendas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function edit($idvendas)
    {
        $vendas = Vendas::find($idvendas);
        $clientes = Clientes::all();
        $produtos =  Produtos::all();
        $vendedores = Vendedores::all();
        return view('vendas.edit',compact('vendas','clientes','produtos' , 'vendedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $idvenda)
    {

        $vendas = Vendas::find($idvenda);

        $request->validate(
            [
                "idcliente.required"    => "O nome do cliente é obrigatório.",
                "idvendedor.required"    => "A indentificação do vendedor é obrigatória.",
                "idproduto.required"    => "A indentificação do produto é obrigatória.",
                "quantidade.required"    => "A quantidade é obrigatória.",
                "datavenda.required"    => "A data de venda é obrigatória.",
            ]
        );

        $vendas->idcliente = $request->idcliente;
        $vendas->idvendedor = $request->idvendedor;
        $vendas->idproduto = $request->idproduto;
        $vendas->quantidade = $request->quantidade;
        $vendas->datavenda = $request->datavenda;


        $vendas->save();

        return redirect()->route('vendas.index')
        ->with('msg_success', 'Venda atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendas  $vendas
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvendas)
    {
        $vendas = Vendas::find($idvendas);
       
        $vendas->delete();

        return redirect()->route('vendas.index')
        ->with('msg_success', 'Venda removida com sucesso'); 
    }
}
