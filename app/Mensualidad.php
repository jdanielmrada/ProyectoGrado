<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected $table='mensualidads';

    protected $fillable= ['fecha_corte_mensualidad'];

    public function inscripcion(){
        return $this->hasOne('App\Inscripcion');
    }
    public function meses(){
    	return $this->belongsToMany('App\Mes');
    }
}
