<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'type',
        'filename',
        'url',
        'extension',
        'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime'
    ];
}
