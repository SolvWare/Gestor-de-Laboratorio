<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = "reporte";

    protected $fillable = [
        'numReporte', 'fecha', 'id_ses',
    ];

    public function detallesR()
    {
        return $this->hasMany('App\DetalleReporte');
    }

    public function sesion()
    {
        return $this->belongsTo('App\Sesion');
    }
}
