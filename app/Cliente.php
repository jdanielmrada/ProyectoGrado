<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table= 'clientes';

    protected $fillable= ['cedula','apellido','nombre','sexo','antecedente','telefono','direction','user_id','inscripcion_id'];


    public function user(){
        return $this->belongsTo('App\User');
    } 

    public function inscripcion(){
    	return $this->belongsTo('App\Inscripcion');
    }

}
