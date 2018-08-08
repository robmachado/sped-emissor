<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Creates accounts table 
     * Tabela dos emissores de NFe
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao_social', 60);
            $table->string('nome_fantasia', 60)->nullable(); 
            $table->string('documento', 15)->unique();
            $table->string('documento_tipo', 4)->default('CNPJ');
            $table->string('ie', 15)->nullable();
            $table->string('iest', 15)->nullable();
            $table->string('im', 30)->nullable();
            $table->string('cnae', 10)->nullable();
            $table->enum('crt', [1,2,3])->default(3);
            $table->longText('certificado_pfx')->nullable()->default(null);
            $table->longText('certificado_cadeia')->nullable();
            $table->string('certificado_senha', 256)->nullable();
            $table->date('certificado_validade')->nullable();
            $table->longText('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
