<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tipo_seguro_id',
        'nome',
        'descricao',
        'status',
        'data_inicio',
        'data_fim',
    ];

    public function questionario()
    {
        return $this->hasMany(QuestionarioRespostas::class, 'solicitacao_id', 'id');
    }

    public function cobertura()
    {
        return $this->hasMany(CoberturaRespostas::class, 'solicitacao_id', 'id');
    }

    public function tipoSeguro()
    {
        return $this->hasOne(TipoSeguro::class, 'id', 'tipo_seguro_id');
    }

}
