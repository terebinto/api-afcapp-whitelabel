<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franquia extends Model
{   
    protected $table = 'franquia';
    use HasFactory;


    protected $fillable = [
        'tipo_seguro_id',
        'nome', 
             
    ];
}
