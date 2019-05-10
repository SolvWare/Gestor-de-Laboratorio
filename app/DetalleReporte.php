<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleReporte extends Model
{
    protected $table = "detalle_reportes";

    protected $fillable = [
        'horaEntrada', 'horaSalida', 'observacion', 'maquina', 'reporte_id',
    ];

    public function reporte()
    {
        return $this->belongsTo(Reporte::class);
    }
}
