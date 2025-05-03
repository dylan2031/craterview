<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'room_type',
        'check_in',
        'check_out',
        'nights',
        'price_per_night',
        'total_price',
        'special_request',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
