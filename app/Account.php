<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'documento',
        'documento_tipo',
        'ie',
        'iest',
        'im',
        'cnae',
        'crt',
        'certificado_pfx',
        'certificado_cadeia',
        'certificado_senha',
        'certificado_validade',
        'logo'
    ];
}
