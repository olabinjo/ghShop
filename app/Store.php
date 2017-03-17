<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //

    function user()
    {
    	return $this->belongsTo(User::class);
    }
}
