<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'amount',
        'message',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
