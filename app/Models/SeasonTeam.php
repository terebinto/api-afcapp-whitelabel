<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeasonTeam extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_season_teams';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'season_id',
        'team_id',
        'bonus_point'
    ];
}
