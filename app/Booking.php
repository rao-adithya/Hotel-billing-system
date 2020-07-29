<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
        protected $table = 'bookings';

    protected $fillable = ['name','phone','email', 'roomid','address','checkin','checkout'];

    public function rooms()
    {
        return $this->belongsTo('App\Models\Room');
    }

        public function customer()
    {
        return $this->hasMany('App\Models\Customer');
    }
}
