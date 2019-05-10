<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $table = "sesions";

    protected $fillable = [
        'numsesion', 'usuario_id',
    ];
    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
