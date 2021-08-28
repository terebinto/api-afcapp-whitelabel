<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_id_corretor',
        'solicitacao_id',
        'data_inicio_vigencia',
        'data_fim_vigencia',
        'validade_proposta',
        'scoreFinal',
        'valor',
    ];

    public function cobertura()
    {

        return $this->hasMany(CoberturaRespostas::class, 'cobertura_id', 'id');
    }

    public function franquia()
    {

        return $this->hasMany(FranquiaProposta::class, 'franquia_id', 'id');
    }

    

}
