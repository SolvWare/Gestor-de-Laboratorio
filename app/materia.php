<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materia extends Model
{  /*
    public function grupos()
    {
        return  $this->hasMany('App\grupo');
    }
    /*
   / public function usuarios()
    {
        return  $this->belongsToMany(usuario::class);
    }
    */
   protected $fillable =['grupoM, codigoM','nombreM'];
}
