<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horario";

    protected $fillable = [
        'dia', 'horaInicio', 'horaFin', 'lab_id', 'mat_id',
    ];

    public function laboratorio()
    {
        return $this->belongsTo('App\Laboratorio');
    }

    public function materia()
    {
        return $this->belongsTo('App\Materia');
    }

    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }
}
