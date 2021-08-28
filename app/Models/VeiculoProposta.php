<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoProposta extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo_id',
        'proposta_id',

    ];

}
