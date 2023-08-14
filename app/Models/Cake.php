<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    protected $table = 'cake';

    protected $fillable = [
        'name',
        'price',
        'type',
        'image',
        'details',
    ];
}