<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'id_lab','dia', 'hora_ini', 'hora_fin', 'estado',
    ];
}
