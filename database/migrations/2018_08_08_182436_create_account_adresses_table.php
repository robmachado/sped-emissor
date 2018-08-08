<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_adresses', function (Blueprint $table) {
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
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_adresses');
    }
}
