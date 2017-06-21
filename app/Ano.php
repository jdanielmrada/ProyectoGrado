<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ano extends Model
{
    protected $table='anos';

    protected $fillable= ['name'];

    public function mensualidades(){
    	return $this->hasMany('App\Mensualidad');
    }
   
}
