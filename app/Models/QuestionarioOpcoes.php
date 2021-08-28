<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionarioOpcoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'pontos',
        'questionario_id',
        'opcao',              
    ];
}
