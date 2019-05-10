<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'sesione_id', 'name', 'descripcion', 'file'
    ];
}
