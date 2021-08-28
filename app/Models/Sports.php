<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    use HasFactory;

    protected $table = 'nx510_sports';

    public function positions()
    {
        return $this->hasMany(Positions::class, 'sports_id', 'id');
    }
}
