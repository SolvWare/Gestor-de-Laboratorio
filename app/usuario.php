<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //
    protected $table='usuarios';
    protected $fillable = ['codSis','ciUsr','nameUsr','lastUsr','rol',];
    // public $timestamps = false;
}
