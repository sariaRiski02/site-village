<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    /** @use HasFactory<\Database\Factories\HomeFactory> */
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'is_bumdes' => 'boolean'
    ];
}
