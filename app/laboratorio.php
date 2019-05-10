<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $fillable = [
        'nameL', 'capL',
    ];
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
