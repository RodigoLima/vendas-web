<?php

namespace App\Models;
use App\Models\Clientes;
use App\Models\Vendedores;
use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;

    public $primaryKey = 'idvenda';

    public function get_nome_cliente($idcliente)
    {
        return Clientes::find($idcliente)->nomecliente;
    }

    public function get_nome_vendedor($idvendedor)
    {
        return Vendedores::find($idvendedor)->nomevendedor;
    }

    public function get_nome_produto_venda($idproduto)
    {
        return Produtos::find($idproduto)->descricaoproduto;
    }
}
