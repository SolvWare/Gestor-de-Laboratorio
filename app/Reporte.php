<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $table = "reportes";

    protected $fillable = [
        'numReporte', 'fecha', 'sesion_id',
    ];

    public function detalleReportes()
    {
        return $this->hasMany(DetalleReporte::class);
    }

    public function sesion()
    {
        return $this->belongsTo(Sesion::class);
    }
}
