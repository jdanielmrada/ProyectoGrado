<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Altura_data extends Model
{
    protected $table='altura_datas';

    protected $fillable= ['altura'];

    public function pesos(){
        return $this->belongsToMany('App\Altura')->withTimestamps();
    }
}
