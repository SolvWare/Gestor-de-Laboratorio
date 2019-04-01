<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupo extends Model
{  
    public function materia ()
    {
        return  $this->belongsTo(materia::class);
    }
    
}
