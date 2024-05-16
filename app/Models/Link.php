<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';
    protected $primaryKey = 'short_url';
    public $incrementing = 'false';
    protected $fillable = [
        'short_url', 'user_id', 'long_url', 'expires_at', 'last_visited'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
