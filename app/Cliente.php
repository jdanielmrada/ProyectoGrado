<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='clientes';

    protected $fillable= ['antecedente_medico','creador','user_id','inscripcion_id','peso_id','altura_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function inscripcion(){
    	return $this->belongsTo('App\Inscripcion');
    }
    public function peso(){
    	return $this->belongsTo('App\User');
    }
    public function altura(){
    	return $this->belongsTo('App\Altura');
    }
}
