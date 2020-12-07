<?php

namespace App\Http\Controllers;
use App\Models\Cidades;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedores::all(); 
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades = Cidades::all();
        return view('vendedores.create',compact('cidades'));
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
                "nomevendedor.required"    => "O nome do cliente é obrigatório.",
                "idcidade.required"    => "A indentificação da profissão é obrigatória.",
                "nascimento.required"    => "A indentificação da cidade é obrigatória.",
            ]
        );


        $vendedores = new Vendedores;

        $vendedores->nomevendedor = $request->nomevendedor;
        $vendedores->idcidade = $request->idcidade;
        $vendedores->nascimento = $request->nascimento;


        $vendedores->save();

        return redirect()->route('vendedores.index')
        ->with('msg_success', 'Vendedor cadastrado com sucesso.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function show($idvendedor)
    {
        $vendedores = Vendedores::find($idvendedor);
        return view('vendedores.show', compact('vendedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function edit($idvendedor)
    {
        $vendedores = Vendedores::find($idvendedor);
        $cidades = Cidades::all();
        return view('vendedores.edit', compact('vendedores','cidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idvendedor)
    {

        $vendedores = Vendedores::find($idvendedor);

        $request->validate(
            [
                "nomevendedor.required"    => "O nome do cliente é obrigatório.",
                "idcidade.required"    => "A indentificação da profissão é obrigatória.",
                "nascimento.required"    => "A indentificação da cidade é obrigatória.",
            ]
        );


        $vendedores = Vendedores::find($idvendedor);

        $vendedores->nomevendedor = $request->nomevendedor;
        $vendedores->idcidade = $request->idcidade;
        $vendedores->nascimento = $request->nascimento;


        $vendedores->save();

        return redirect()->route('vendedores.index')
        ->with('msg_success', 'Vendedor atualizado com sucesso.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendedores  $vendedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($idvendedor)
    {
        $vendedores = Vendedores::find($idvendedor);

        $vendedores->delete();

        return redirect()->route('vendedores.index')
        ->with('msg_success', 'Vendedor removido com sucesso');
    }
}
