<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $fillable = [
        's_name',
        's_descr',
        's_rounds',
        'published',
        't_id',
        's_win_point',
        's_lost_point',
        's_enbl_extra',
        's_extra_win',
        's_extra_lost',
        's_draw_point',
        's_groups',
        's_win_away',
        's_draw_away',
        's_lost_away',
        's_segunda_fase_grupo',
        's_segunda_fase_total_classificados',
        's_segunda_fase_data',

    ];


    public function matchdays()
    {
        return $this->hasMany(Matchday::class, 's_id', 'id');
    }


    public function jogos()
    {

        return $this->hasMany(Matchs::class, 'm_id', 'id');
    }

}
