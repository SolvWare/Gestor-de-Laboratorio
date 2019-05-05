<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "users";

    protected $fillable = [
        'codsis', 'ci', 'nameUsr', 'lastUsr','password', 'id_rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public function rol()
    {
        return $this->belongsToMany('App\Rol');
    }

    public function portafolios()
    {
        return $this->hasMany('App\Portafolio');
    }

    public function sesiones()
    {
        return $this->hasMany('App\Sesion');
    }

    public function materias()
    {
        return $this->belongsToMany('App\Materia');
    }

    public function horarios()
    {
        return $this->belongsToMany('App\Horario');
    }
}