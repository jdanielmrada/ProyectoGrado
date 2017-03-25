<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected $table='mensualidades';

    protected $fillable= ['pagomes','mes','inscripcion_id'];

     public function inscripcion(){
        return $this->belongsTo('App\Inscripcion');
    } 
}
