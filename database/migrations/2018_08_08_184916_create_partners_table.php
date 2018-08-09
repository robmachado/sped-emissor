<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Creates partners table
     * Tabela de parceiros (clientes, fornecedores e transportadoras)
     * ou seja os destinátios das NFe
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao_social', 60);
            $table->string('nome_fantasia', 60)->nullable(); 
            $table->string('documento', 15)->unique();
            $table->string('documento_tipo', 4)->default('CNPJ');
            $table->string('ie', 15)->nullable();
            $table->string('suframa', 15)->nullable();
            $table->boolean('contribuinte_icms')->default(true);
            $table->enum('qualificador', ['C','F','T'])->default('C');
            $table->string('email', 60)->nullable();
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts');
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
        Schema::dropIfExists('partners');
    }
}
