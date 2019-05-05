<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReporte extends Model
{
    protected $table = "Detalle_Reporte";

    protected $fillable = [
        'horaEntrada', 'horaSalida', 'observacion', 'maquina', 'id_repor',
    ];

    public function reporte()
    {
        return $this->belongsTo('App\Reporte');
    }
}
