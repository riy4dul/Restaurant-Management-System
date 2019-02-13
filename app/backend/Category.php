<?php

namespace App\backend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   public function items()
   {
   	 return $this->hasMany('App\backend\Item');
   }
}
