<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastU', 'email', 'password', 'ci',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
    public function inscripciones()
    {
        return $this->hasMany(Inscripcione::class);
    }
    public function practicas()
    {
        return $this->hasMany(Practica::class);
    }
}
