<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
   protected $table="blocks";

   protected $fillable=['asunto', 'description', 'user_id'];

   public function user()
   {
   	return $this->belongsTo('App\User');
   }
}