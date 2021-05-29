<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class modeladmin1 extends Authenticatable
{
    use Notifiable;
    protected $gaurd = 'admin1';
    protected $fillable=['email','password'];
    protected $hidden=['password','remember_token'];
}
