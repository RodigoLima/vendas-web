<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id('idvenda');
            $table->unsignedBigInteger('idproduto');
            $table->unsignedBigInteger('idcliente');
            $table->unsignedBigInteger('idvendedor');
            $table->foreign('idproduto')->references('idproduto')->on('produtos')->onDelete('cascade');
            $table->foreign('idcliente')->references('idcliente')->on('clientes')->onDelete('cascade');
            $table->foreign('idvendedor')->references('idvendedor')->on('vendedores')->onDelete('cascade');
            $table->double('quantidade');
            $table->date('datavenda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendas');
    }
}
