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
    protected $fillable = [
        'name', 'email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //add for fradev
    public function getIsAdmin()
    {
        return $this->role==0;
    }
    public function getIsDocente()
    {
        return $this->role==1;
    }
    public function getIsAux()
    {
        return $this->role==2;
    }
    public function getIsEst()
    {
        return $this->role==3;
    }
}
