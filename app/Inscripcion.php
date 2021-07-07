<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table='inscripcions';

    protected $fillable= ['cliente_id','mensualidad_id','fecha_corte_inscripcion'];

    public function mensualidad(){
        return $this->belongsTo('App\Mensualidad');
    } 

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
