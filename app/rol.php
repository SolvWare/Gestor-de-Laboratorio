<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $fillable = ['name_rol'];
    protected $dates = ['created_at','updated_at'];
}
