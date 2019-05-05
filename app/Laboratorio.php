<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = "laboratorio";

    protected $fillable = [
        'nombreLab', 'capacidad',
    ];

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }
}
