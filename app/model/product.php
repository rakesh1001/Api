<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Review;
class Product extends Model
{
    //
    function review()
    {
    	return $this->hasMany(Review::class);
    }
}
