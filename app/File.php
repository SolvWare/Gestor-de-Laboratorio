<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name','size',
];
 public function usuario(){

    return $this->belongsTo(Usuario::class);

 }
}
