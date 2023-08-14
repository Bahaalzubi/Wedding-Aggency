<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;

    protected $table = 'details';

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function dj()
    {
        return $this->belongsTo(Dj::class, 'dj_id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id');
    }

    public function catering()
    {
        return $this->belongsTo(Catering::class, 'catering_id');
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'theme_id');
    }

    public function cake()
    {
        return $this->belongsTo(Cake::class, 'cake_id');
    }
}
