<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = ['roomid','bookid','phoneno','description'];

        public function rooms()
    {
        return $this->belongsTo('App\Models\Room','roomid');
    }

        public function bookings()
    {
        return $this->belongsTo('App\Models\Booking','bookid');
    }
}
