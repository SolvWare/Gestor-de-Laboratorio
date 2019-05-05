<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    protected $table = "portafolio";

    protected $fillable = [
        'producto', 'cod_sis',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
