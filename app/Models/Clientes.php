<?php

namespace App\Models;
use App\Models\Profissoes;
use App\Models\Cidades;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    public $primaryKey = 'idcliente';

    public function get_nome_profissao($idprofissao)
    {
        return Profissoes::find($idprofissao)->descricaoprofissao;
    }

    public function get_nome_cidade($idcidade)
    {
        return Cidades::find($idcidade)->nomecidade;
    }

}
