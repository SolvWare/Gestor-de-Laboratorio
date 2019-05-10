<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'laboratorio_id', 'materia_id', 'diaH', 'periodoH',
    ];
    public function laboratorio()
    {
        return $this->belongsTo(Laboratorio::class);
    }
    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
    public function inscripciones()
    {
        return $this->hasMany(Inscripcione::class);
    }
}
