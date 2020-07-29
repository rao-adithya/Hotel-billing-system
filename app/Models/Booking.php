<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
        protected $table = 'bookings';

    protected $fillable = ['name','phone','email', 'categoryid','roomid','address','checkin','checkout'];

     public function categories()
    {
        return $this->belongsTo('App\Models\Category','categoryid');
    }

    public function rooms()
    {
        return $this->belongsTo('App\Models\Room','roomid');
    }

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }

}
