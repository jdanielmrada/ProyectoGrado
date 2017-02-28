<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripciones';

    protected $fillable= ['pago','cliente_id'];

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    } 

     public function mensualidades(){
        return $this->hasMany('App\Mensualidad');
    }

}
