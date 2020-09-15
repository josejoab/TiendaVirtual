<?php
/**
    *Autor: Kevin Herrera
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});
