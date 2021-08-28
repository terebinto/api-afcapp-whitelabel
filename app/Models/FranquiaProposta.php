<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranquiaProposta extends Model
{
    use HasFactory;

    protected $fillable = [
        'proposta_id',
        'franquia_id', 
        'nome', 
        'valor',         
    ];


}
