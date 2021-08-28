<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSeguro extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',      
    ];

    public function cobertura()
    {

      
        return $this->hasMany(Cobertura::class, 'tipo_seguro_id', 'id');
    }


}
