<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = ' nx510_bl_players';

    protected $fillable = [
        'first_name',
        'last_name',
        'nick',
        'position_id',
        'def_img',
        'team_id',
        'rg',
        'cpf',
        'matricula',
        'email',
        'altura',
        'federado',
        'suspensoRodadas',
        'dataNascimento',
    ];
   

}
