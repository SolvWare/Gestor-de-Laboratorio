<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";

    protected $fillable = [
        'nombreLab', 'capacidad',
    ];

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }
}
