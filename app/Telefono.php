<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $table='telefonos';

    protected $fillable= ['personal','casa'];

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    } 
}
