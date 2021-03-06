<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_tournament';

    protected $fillable = [
        'name',
        'descr',
        'logo',
        'published',
        'path',
        'sigla',
        'ordem',
        'id_cidade',
        'is_federado',
        'id_noticia',
        'id_banner',
        'parceiro',
        'id_sport',
    ];


    public function season()
    {
        return $this->hasMany(Season::class, 't_id', 'id');
    }





}