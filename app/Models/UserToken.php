<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'token',
        'reset',
        'info',
        'start',
        'last',
    ];

    protected $casts = [
        'start' => 'datetime',
        'last' => 'datetime',
    ];
}
