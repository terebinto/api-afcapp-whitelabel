<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'nx510_bl_groups';

    protected $fillable = [
        'group_name',
        's_id',
        'ordering',
    ];

    public function groupteam()
    {
        return $this->hasMany(GroupTeam::class, 'g_id', 'id');
    }

}
