<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'documento',
        'documento_tipo',
        'ie',
        'suframa',
        'contribuinte_icms',
        'qualificador',
        'email',
        'account_id'
    ];
}
