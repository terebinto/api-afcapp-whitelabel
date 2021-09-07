<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchday extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_matchday';

    protected $fillable = [
        'm_name',
        'm_descr',
        's_id',
        'is_playoff',        
    ];

    public function matchs()
    {
        return $this->hasMany(Matchs::class, 'm_id', 'id');
    }


}

