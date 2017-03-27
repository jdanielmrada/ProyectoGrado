<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripciones';

    protected $fillable= ['pago','cliente_id','mensualidad_id'];

    public function mensualidad(){
        return $this->belongsTo('App\Mensualidad');
    } 

    public function cliente(){
        return $this->hasOne('App\Cliente');
    }
}
