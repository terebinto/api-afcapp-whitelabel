<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoberturaRespostas extends Model
{
    use HasFactory;

    protected $fillable = [
        'solicitacao_id',
        'cobertura_id', 
        'nome',         
    ];
}
