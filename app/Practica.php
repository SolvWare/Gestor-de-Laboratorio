<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Practica extends Model
{
    protected $fillable = [
        'user_id', 'name', 'descripcion', 'file'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}