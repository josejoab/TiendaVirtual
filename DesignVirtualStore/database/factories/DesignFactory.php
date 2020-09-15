<?php
/**
    *Autor: Kevin Herrera
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Design;
use Faker\Generator as Faker;

$factory->define(Design::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'price'=>$faker->numberBetween($min = 1000, $max = 900000),
        'description'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
        'image'=>'techo1.jpg',
        'width'=>$faker->numberBetween($min = 10, $max = 90),
        'length'=>$faker->numberBetween($min = 10, $max = 90),
        'category_id'=>$faker->numberBetween($min = 1, $max = 5)
    ];
});
