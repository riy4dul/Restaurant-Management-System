<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
    	return $this->belongsTo('App\backend\Category');
    }
}
