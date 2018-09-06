<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
     function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
