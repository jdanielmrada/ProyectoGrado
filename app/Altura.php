<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altura extends Model
{
    protected $table='alturas';

    public function cliente(){
        return $this->hasOne('App\Cliente');
    }
    public function altura_detalles(){
    	return $this->belongsToMany('App\Altura_data');
    }
}
