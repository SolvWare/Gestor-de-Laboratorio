<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horario";

    protected $fillable = [
        'horaInicio', 'horaFin', 'id_lab', 'id_mat',
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
