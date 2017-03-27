<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected $table='mensualidades';

    protected $fillable= ['pagomes','mes'];

     public function inscripciones(){
        return $this->hasMany('App\Inscripcion');
    }
}
