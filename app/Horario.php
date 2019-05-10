<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'laboratorio_id', 'materia_id','dia','hora_ini','horafin','estado'
    ];

    public function usuarios(){

        return $this->belongsToMany(Usuario::class);

    }
     public function laboratorio(){

        return $this->belongsTo(Laboratorio::class);

     }
     public function materia(){

        return $this->belongsTo(Materia::class);

     }
     
}
