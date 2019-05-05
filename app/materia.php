<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materia";

    protected $fillable = [
        'codMat', 'nomMat',
    ];

    public function horarios()
    {
        return $this->hasMany('App\Horario');
    }

    public function grupos()
    {
        return $this->hasMany('App\Grupo');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
