<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = ['categoryid','roomno'];

        public function categories()
    {
        return $this->belongsTo('App\Models\Category','categoryid');
    }

     public function bookings()
    {
        return $this->hasOne('App\Models\Booking');
    }

         public function services()
    {
        return $this->hasOne('App\Models\Service');
    }

}
