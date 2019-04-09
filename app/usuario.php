<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $fillable = [
        'codSis','ciUsr','nameUsr','lastUsr','rol', 'materia', 'grupo',
    ];
}
