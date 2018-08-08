<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountAdress extends Model
{
    protected $table = "account_adresses";
    
    protected $fillable = [
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'municipio',
        'cmun',
        'uf',
        'cep',
        'pais',
        'telefone',
        'account_id'
    ];
}
