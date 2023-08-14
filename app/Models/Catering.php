<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catering extends Model
{
    protected $table = 'catering';

    protected $fillable = [
        'name',
        'price',
        'type',
        'details',
        'image',
    ];
}