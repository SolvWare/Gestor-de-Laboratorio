<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = "sesion";

    protected $fillable = [
        'numsesion', 'cod_sis',
    ];

    public function reportes()
    {
        return $this->hasMany('App\Reporte');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\User');
    }
}
