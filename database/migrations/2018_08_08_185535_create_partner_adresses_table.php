<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerAdressesTable extends Migration
{
    /**
     * Creates Partners table
     * Tabela de endereços dos parceiros de negocios
     * podem ser Clientes, Fornecedores ou transportadoras
     * @return void
     */
    public function up()
    {
        Schema::create('partner_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro', 60);
            $table->string('numero', 60);
            $table->string('complemento', 60)->nullable();
            $table->string('bairro', 60);
            $table->string('municipio', 60);
            $table->string('cmun', 7);
            $table->string('uf', 2);
            $table->string('cep', 8);
            $table->string('pais', 60);
            $table->string('telefone', 14);
            $table->integer('partner_id')->unsigned();
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_adresses');
    }
}
