<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected $table='mensualidads';

    protected $fillable= ['ano_id','costo_id'];

    public function costo(){
    	return $this->belongsTo('App\Costo');
    }

    public function ano(){
    	return $this->belongsTo('App\Ano');
    }

    public function inscripciones(){
        return $this->hasOne('App\Inscripcion');
    }
    public function meses(){
    	return $this->belongsToMany('App\Mes');
    }
}
