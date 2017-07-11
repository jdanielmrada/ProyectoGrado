<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $table= 'mensajes';

    protected $fillable=['name','email','number','empresa','subject','message'];	
}
