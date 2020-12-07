<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\Vendas;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all(); 
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
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
                "descricaoproduto.required"    => "O nome do produto é obrigatório.",
                "valorproduto.required"    => "O valor do produto é obrigatório.",
            ]
        );


        $produtos = new Produtos;

        $produtos->descricaoproduto = $request->descricaoproduto;
        $produtos->valorproduto = $request->valorproduto;


        $produtos->save();

        return redirect()->route('produtos.index')
        ->with('msg_success', 'Produto cadastrado com sucesso.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show($idproduto)
    {
        $produtos = Produtos::find($idproduto);
        return view('produtos.show', compact('produtos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit($idproduto)
    {
        $produtos = Produtos::find($idproduto);
        return view('produtos.edit', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idproduto)
    {
        $produtos = Produtos::find($idproduto);

        $request->validate(
            [
                "descricaoproduto.required"    => "O nome do produto é obrigatório.",
                "valorproduto.required"    => "O valor do produto é obrigatório.",
            ]
        );

        $produtos->descricaoproduto = $request->descricaoproduto;
        $produtos->valorproduto = $request->valorproduto;


        $produtos->save();

        return redirect()->route('produtos.index')
        ->with('msg_success', 'Produto atualizado com sucesso.'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idproduto)
    {

        $produtos = Produtos::find($idproduto);

    

        $produtos->delete();

        return redirect()->route('produtos.index')
        ->with('msg_success', 'Produto removido com sucesso');
        
    }
}
