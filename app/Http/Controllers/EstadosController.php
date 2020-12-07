<?php

namespace App\Http\Controllers;

use App\Models\Estados;
use App\Models\Cidades;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estados::all(); 
        return view('estados.index', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
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
                "nomeestado.required"    => "O nome do estado é obrigatório.",
                "sigla.required"    => "A indentificação da sigla é obrigatória.",
            ]
        );


        $estados = new Estados;

        $estados->nomeestado = $request->nomeestado;
        $estados->sigla = $request->sigla;


        $estados->save();

        return redirect()->route('estados.index')
        ->with('msg_success', 'Estado cadastrado com sucesso.'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function show($idestado)
    {
        $estados = Estados::find($idestado);
        return view('estados.show', compact('estados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function edit($idestado)
    {
        $estados = Estados::find($idestado);
        return view('estados.edit', compact('estados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idestado)
    {

        $estados = Estados::find($idestado);

        $request->validate(
            [
                "nomeestado.required"    => "O nome do estado é obrigatório.",
                "sigla.required"    => "A indentificação da sigla é obrigatória.",
            ]
        );


        $estados->nomeestado = $request->nomeestado;
        $estados->sigla = $request->sigla;


        $estados->save();

        return redirect()->route('estados.index')
        ->with('msg_success', 'Estado atualizado com sucesso.'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estados  $estados
     * @return \Illuminate\Http\Response
     */
    public function destroy($idestado)
    {
        $estados = Estados::find($idestado);

        $estados->delete();

        return redirect()->route('estados.index')
        ->with('msg_success', 'Estado removido com sucesso');
    }
}
