<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $table = 'venue';

    protected $fillable = [
        'name',
        'phone',
        'location',
        'details',
        'price',
        'image',
    ];
}