<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peso_data extends Model
{
    protected $table='peso_datas';

    protected $fillable= ['peso'];

    public function pesos(){
        return $this->belongsToMany('App\Peso')->withTimestamps();
    }
}
