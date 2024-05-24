<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = [
        'username', 'avatar', 'password', 'email', 'last_login'
    ];

    protected $casts = [
        'last_login' => 'date'
    ];

    protected $attributes = [
        'avatar' => 'avatar.jpg'
    ];

    public function links(){
        return $this->hasMany(Link::class);
    }
}
