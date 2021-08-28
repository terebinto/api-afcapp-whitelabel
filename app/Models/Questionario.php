<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionario extends Model
{
    use HasFactory;

    public function opcoes()
    {

        return $this->hasMany(QuestionarioOpcoes::class, 'questionario_id', 'id');
    }

}
