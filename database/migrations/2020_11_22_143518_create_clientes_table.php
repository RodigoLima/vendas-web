<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('idcliente');
            $table->unsignedBigInteger('idprofissao');
            $table->unsignedBigInteger('idcidade');
            $table->foreign('idprofissao')->references('idprofissao')->on('profissoes')->onDelete('cascade');
            $table->foreign('idcidade')->references('idcidade')->on('cidades')->onDelete('cascade');;
            $table->string('nomecliente');
            $table->date('nascimento');
            $table->string('bairro');
            $table->string('rua');
            $table->double('rendamensal');
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
        Schema::dropIfExists('clientes');
    }
}
