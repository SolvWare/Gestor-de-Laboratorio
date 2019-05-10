<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'codeM', 'nameM', 'numGM',
    ];

    public function usuarios(){

        return $this->belongsToMany(Usuario::class);

    }
    public function grupos(){

        return $this->hasMany(Grupo::class);

    }
    public function horarios(){

        return $this->hasMany(Horario::class);

    }
}
