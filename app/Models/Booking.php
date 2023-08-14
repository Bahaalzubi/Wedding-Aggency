<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
      protected $table = 'booking';
      public function details()
      {
          return $this->belongsTo(Details::class);
      }
      
      public function user()
      {
          return $this->belongsTo(User::class);
      }
      
       
    
        public function dj() {
            return $this->belongsTo(Dj::class);
        }
    
        public function venue() {
            return $this->belongsTo(Venue::class);
        }
        public function catering() {
            return $this->belongsTo(Catering::class);
        }
        public function cake() {
            return $this->belongsTo(Cake::class);
        }
        public function theme() {
            return $this->belongsTo(Theme::class);
        }
        // ... other relations ...
    
}
