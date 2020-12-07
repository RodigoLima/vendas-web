<?php

namespace App\Models;
use App\Models\Estados;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    use HasFactory;

    public $primaryKey = 'idcidade';

    public function get_nome_estado($idestado)
    {
        return Estados::find($idestado)->nomeestado;
    }
}
