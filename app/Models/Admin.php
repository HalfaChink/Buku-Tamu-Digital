<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Admin extends Authenticatable implements AuthenticatableContract
{
    protected $fillable = ['username', 'password'];
    protected $hidden = ['password'];
    protected $table = 'admins';
}
