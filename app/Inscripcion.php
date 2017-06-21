<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripcions';

    protected $fillable= ['mensualidad_id','costo_id'];

    public function costo(){
    	return $this->belongsTo('App\Costo');
    }

    public function mensualidad(){
        return $this->belongsTo('App\Mensualidad');
    } 

    public function cliente(){
        return $this->hasOne('App\Cliente');
    }
}
