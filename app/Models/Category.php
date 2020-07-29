<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['roomtype','floor', 'price'];

    public function rooms()
    {
        return $this->hasMany('App\Models\Room');
    }

        public function bookings()
    {
        return $this->hasMany('App\Models\Booking');
    }
}
