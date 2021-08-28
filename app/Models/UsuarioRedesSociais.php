<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRedesSociais extends Model
{
    use HasFactory;

    protected $fillable = [
        'twitter',
        'facebook',
        'instagram',              
    ];

}
