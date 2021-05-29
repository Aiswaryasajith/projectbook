<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class modeluser extends Model
{
    use Notifiable;
    protected $gaurd = 'user';
    protected $fillable=['email','password'];
    protected $hidden=['password','remember_token'];
}
