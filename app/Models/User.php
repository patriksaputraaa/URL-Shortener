<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'username', 'password', 'email', 'last_login'
    ];

    protected $casts = [
        'last_login' => 'date'
    ];

    public function links(){
        return $this->hasMany(Link::class);
    }
}
