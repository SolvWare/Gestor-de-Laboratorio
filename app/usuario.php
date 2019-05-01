<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $fillable = [
        'codSis','ciU','nameU','lastU','rol', 'materia', 'grupo', 'estado',
    ];
}
