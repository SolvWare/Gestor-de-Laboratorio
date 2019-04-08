<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $fillable = [
        'codeR', 'nameR', 'prib1', 'prib2', 'prib3', 'prib4', 'prib5', 'prib6',
    ];
}
