<?php

namespace App\Http\Controllers;

use App\Models\Profissoes;
use App\Models\Clientes;
use App\Models\Cidades;
use App\Models\Estados;
use App\Models\Produtos;
use App\Models\Vendas;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $profissoes = Profissoes::all();
        $clientes = Clientes::all();
        $cidades = Cidades::all();
        $estados = Estados::all();
        $produtos = Produtos::all();
        $vendas = Vendas::all();
        $vendedores = Vendedores::all();

        return view('index', compact(['profissoes', 'clientes', 'cidades', 'estados', 'produtos', 'vendas',
         'vendedores']));
    }
}
