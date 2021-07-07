<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peso extends Model
{
    protected $table='pesos';

    public function cliente(){
        return $this->hasOne('App\Cliente');
    }
    public function peso_detalles(){
    	return $this->belongsToMany('App\Peso_data');
    }
}
