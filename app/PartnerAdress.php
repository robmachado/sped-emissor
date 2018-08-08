<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerAdress extends Model
{
    protected $table = "partner_adresses";
    
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
        'partner_id'
    ];
}
