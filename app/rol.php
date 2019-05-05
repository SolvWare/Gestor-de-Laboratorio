<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = "rol";
    
    protected $fillable = [
        'codRol', 'nombreRol', 'prib1', 'prib2', 'prib3', 'prib4', 'prib5', 'prib6',
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
