<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';

    protected $fillable = ['email', 'password','role'];

    protected $hidden = ['password', 'remember_token'];

    public function dato(){
        return $this->belongsTo('App\Dato');
    }

    public function admin(){
        return $this->role === 'admin';
    }
    public function trainer(){
        return $this->role === 'trainer';
    }
      public function cliente(){
        return $this->hasOne('App\Cliente');
    }
    public function articles(){
        return $this->hasMany('App\Articles');
    }
}
