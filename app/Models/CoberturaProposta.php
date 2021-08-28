<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoberturaProposta extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposta_id',
        'cobertura_id', 
        'valor',  
        'nome',
        'descricaoAdicional',         
    ];


}
