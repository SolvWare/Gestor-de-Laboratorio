<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripcions';
    protected $fillable = [
        'uasuario_id','materia', 'laboratorio', 'dia','hora'
    ];

    public function usuarios(){

        return $this->belongsTo(Usuario::class);

     }
}
