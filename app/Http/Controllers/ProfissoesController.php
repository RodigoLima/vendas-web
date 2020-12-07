<?php

namespace App\Http\Controllers;

use App\Models\Profissoes;
use App\Models\Vendas;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfissoesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profissoes = Profissoes::all(); 
        return view('profissoes.index', compact('profissoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profissoes.create');
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
            [   'descricaoprofissao' => 'required|min:3|unique:profissoes'  ],
            [
                "descricaoprofissao.min"    => "O nome da profissão deve ter no mínimo 3 letras.",
                "descricaoprofissao.unique" => "Profissão já cadastrada.",
                "descricaoprofissao.required"    => "O nome da profissão é obrigatória.",
            ]
        );


        $profissoes = new Profissoes;
        $profissoes->descricaoprofissao = $request->descricaoprofissao;
        $profissoes->save();

        return redirect()->route('profissoes.index')
        ->with('msg_success', 'Profissão cadastrada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profissoes  $profissoes
     * @return \Illuminate\Http\Response
     */
    public function show($idprofissao)
    {
        $profissao = Profissoes::find($idprofissao);
        return view('profissoes.show', compact('profissao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profissoes  $profissoes
     * @return \Illuminate\Http\Response
     */
    public function edit($idprofissao)
    {
        $profissao = Profissoes::find($idprofissao);
        return view(
            'profissoes.edit', 
            compact('profissao')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profissoes  $profissoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idprofissao)
    {
        
        $profissoes = Profissoes::find($idprofissao);

        $request->validate(
            [   'descricaoprofissao' => 'required|min:3|unique:profissoes'  ],
            [
                "descricaoprofissao.min"    => "O nome da profissão deve ter no mínimo 3 letras.",
                "descricaoprofissao.unique" => "Profissão já cadastrada.",
                "descricaoprofissao.required" => "O nome da profissão é obrigatória.",
            ]
        );

      

        $profissoes->descricaoprofissao =  $request->descricaoprofissao;;
        $profissoes->save();

        return redirect()->route('profissoes.index')
        ->with('msg_success', 'Profissão atualizada com sucesso');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profissoes  $profissoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($idprofissao)
    {
        $profissoes = Profissoes::find($idprofissao);

        $profissoes->delete();

        return redirect()->route('profissoes.index')
        ->with('msg_success', 'Profissão removida com sucesso'); 
    }
}
