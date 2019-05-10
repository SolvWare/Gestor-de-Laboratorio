<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    

    public function materia(){

        return $this->belongsTo(Materia::class);

     }
}
