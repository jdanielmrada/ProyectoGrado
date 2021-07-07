<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table='archivos';

    protected $fillable=['name','article_id'];

    public function article(){
    	return $this->belongsTo('App\Article');
    }
}
