<?php

use Faker\Generator as Faker;
use App\model\Product;
$factory->define(App\model\Review::class, function (Faker $faker) {
    return [
        //
        'product_id'=>function(){
        	return Product::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph
    ];
});
