<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupTeam extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_grteams';

    protected $fillable = [
        'g_id',
        't_id',
    ];


    public function teams()
    {
        return $this->hasMany(Team::class, 't_id', 'id');
    }
}
