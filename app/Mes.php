<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    protected $table='mes';

    protected $fillable= ['mes'];

    public function mensualidades(){
        return $this->belongsToMany('App\Mensualidad')->withTimestamps();
    }
}
