<?php
/**
    *Autor: Kevin Herrera
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WishDesign;
use Faker\Generator as Faker;

$factory->define(WishDesign::class, function (Faker $faker) {
    static $wishList = 1;
    return [
        'wishList_id'=>$wishList++,
        'design_id'=>$faker->numberBetween($min = 1, $max = 10)
    ];
});
