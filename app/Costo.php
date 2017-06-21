<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costo extends Model
{
    protected $table='costos';

    protected $fillable= ['name'];

    public function mensualidades(){
    	return $this->hasMany('App\Mensualidad');
    }
    public function inscripciones(){
    	return $this->hasMany('App\Inscripcion');
    }
    
}
