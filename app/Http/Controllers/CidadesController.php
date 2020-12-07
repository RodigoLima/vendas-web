<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use App\Models\Estados;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidades::all(); 
        return view('cidades.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $estados = Estados::all(); 
        return view('cidades.create', compact('estados'));
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
                "nomecidade.required"    => "O nome da cidade é obrigatória.",
                "idestado.required"    => "A indentificação do estado obrigatória .",
            ]
        );


        $cidades = new Cidades;

        $cidades->nomecidade = $request->nomecidade;
        $cidades->idestado = $request->idestado;


        $cidades->save();

        return redirect()->route('cidades.index')
        ->with('msg_success', 'Cidade cadastrada com sucesso.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function show($idcidade)
    {
        $cidades = Cidades::find($idcidade);
        return view('cidades.show', compact('cidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function edit($idcidade)
    {
        $cidades = Cidades::find($idcidade);
        $estados = Estados::all(); 
        return view('cidades.edit', compact('cidades','estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idcidade)
    {

        $cidades = Cidades::find($idcidade);

        $request->validate(
            [
                "nomecidade.required"    => "O nome da cidade é obrigatória.",
                "idestado.required"    => "A indentificação do estado obrigatória .",
            ]
        );


        $cidades->nomecidade = $request->nomecidade;
        $cidades->idestado = $request->idestado;


        $cidades->save();

        return redirect()->route('cidades.index')
        ->with('msg_success', 'Cidade atualizada com sucesso.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cidades  $cidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcidade)
    {
        $cidades = Cidades::find($idcidade);

        $cidades->delete();

        return redirect()->route('cidades.index')
        ->with('msg_success', 'Cidade removida com sucesso');
    }
}
