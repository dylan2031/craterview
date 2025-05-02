<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'star_rating',
        'body',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
}
