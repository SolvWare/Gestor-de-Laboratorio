<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesione extends Model
{
    protected $fillable = [
        'inscripcione_id', 'inicio', 'fin', 'maquina', 'observacion',
    ];
    public function inscripcione()
    {
        return $this->belongsTo(Inscripcione::class);
    }
    public function producto()
    {
        return $this->hasOne(Producto::class);
    }
}
