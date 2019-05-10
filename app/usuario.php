<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Usuario extends Model
{
    protected $table='usuarios';
    protected $primaryKey='id';
    protected $fillable = [
        'codSis','ciU','nameU','lastU','rol', 'materia', 'grupo', 'estado',
    ];

    public function roles(){

        return $this->belongsToMany(Rol::class);

    }
    public function materias(){

        return $this->belongsToMany(Materia::class);

    }
    public function horarios(){

        return $this->belongsToMany(Horario::class);

    }
    public function files(){

        return $this->hasMany(File::class);

    }
    public function sesions(){

        return $this->hasMany(Sesion::class);

    }
    public function inscripcion(){

        return $this->hasOne(Inscripcion::class);

     }
}
