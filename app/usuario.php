<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $fillable = [
        'codSis','ciUsr','nameUsr','lastUsr','rol', 'materia', 'grupo',
    ];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
