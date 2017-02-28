<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table= 'clientes';

    protected $fillable= ['cedula','apellido','nombre','sexo','antecedente','telefono_id','direction','user_id'];

    public function telefono(){
        return $this->hasOne('App\Telefono');
    }

    public function user(){
        return $this->belongsTo('App\User');
    } 

    public function inscripcion(){
        return $this->hasOne('App\Inscripcion');
    }
}
