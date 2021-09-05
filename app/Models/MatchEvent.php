<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchEvent extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_match_events';

    protected $fillable = [
        'e_id',
        'player_id',
        'match_id',
        'ecount',
        'minutes',
        't_id',
    ];
}
