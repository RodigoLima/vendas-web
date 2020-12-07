<?php

namespace App\Models;
use App\Models\Cidades;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    use HasFactory;

    public $primaryKey = 'idvendedor';

    public function get_nome_cidade_vendedor($idcidade)
    {
        return Cidades::find($idcidade)->nomecidade;
    }
}
