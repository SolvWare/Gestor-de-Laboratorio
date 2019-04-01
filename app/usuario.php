<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{  
    public function materias()
    {
        return  $this->belongsToMany(materia::class);
    }

    public function rol ()
    {
        return  $this->belongsTo(rol::class);
    }
    public function sesions()
    {
        return  $this->hasMany(sesion::class);
    }
    
}
