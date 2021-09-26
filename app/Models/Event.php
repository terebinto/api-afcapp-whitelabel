<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_events';

    protected $fillable = [
        'e_name',
        'e_img',
        'e_descr',
        'player_event',
        'id_sport',
        'exibir_app',
        'titulo_app',
        'descricao_unica',       
    ];
    
}
