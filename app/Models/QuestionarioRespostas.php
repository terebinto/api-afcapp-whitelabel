<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionarioRespostas extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitacao_id',
        'questionario_id',
        'resposta',
        'pergunta',        
    ];
}
