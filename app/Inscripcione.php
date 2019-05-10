<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcione extends Model
{
    protected $fillable = [
        'horario_id', 'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }
    public function sesiones()
    {
        return $this->hasMany(Sesione::class);
    }
}
