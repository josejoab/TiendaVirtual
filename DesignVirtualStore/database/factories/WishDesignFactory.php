<?php
/**
    *Autor: Kevin Herrera
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WishDesign;
use Faker\Generator as Faker;

$factory->define(WishDesign::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween($min = 1, $max = 3),
        'design_id'=>$faker->numberBetween($min = 1, $max = 10)
    ];
});
