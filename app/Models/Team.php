<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_teams';

    protected $fillable = [
        't_name',
        't_descr',
        't_about',
        't_yteam',
        't_def_img',
        't_emblem',
        't_city',
        't_coach',
        't_secondary_color',
        't_main_color',
        't_initials',
        't_email',
        't_representative',
        't_assistant_1',
        't_assistant_2',
        't_assistant_3',
        't_director',
        't_foundation',
        't_id_cidade',
    ];


    public function players()
    {

        return $this->hasMany(Player::class, 'team_id', 'id');
    }





}
