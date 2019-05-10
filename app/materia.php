<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = [
        'nameM', 'grupo'
    ];
    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
