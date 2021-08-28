<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'situacao',
        'modelo',
        'marca',
        'cor',
        'ano',
        'anoModelo',
        'placa',
        'data',
        'uf',
        'municipio',
        'chassi',
        'dataAtualizacaoCaracteristicasVeiculo',
        'dataAtualizacaoRouboFurto',
        'dataAtualizacaoAlarme',
    ];


}
