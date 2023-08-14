<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dj extends Model
{
    protected $table = 'dj';

    protected $fillable = [
        'name',
        'price',
        'phone',
        'details',
        'image',
    ];
}