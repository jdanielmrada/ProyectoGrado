<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $table= 'datos';

    protected $fillable= ['name','cedula','telefono','sexo','direction'];

    public function users(){
    	return $this->hasMany('App\User');
    }
}
