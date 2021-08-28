<?php

namespace App\Models;

use App\Models\TipoSeguro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobertura extends Model
{
    use HasFactory;


    public function tiposeguro()
    {

        return $this->belongsTo(TipoSeguro::class, 'tipo_seguro_id', 'id');
    }


}
