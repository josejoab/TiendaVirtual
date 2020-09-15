<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DesignOrder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
/**
    *Autor: Joab Romero
*/
$factory->define(DesignOrder::class, function (Faker $faker) {
    return [
        'quantity' => $faker->numberBetween($min = 1, $max = 100),
        'subTotalPrice' => $faker->numberBetween($min = 200, $max = 9000),
        'orderId'=>$faker->numberBetween($min = 1, $max = 100),
        'designId'=>$faker->numberBetween($min = 1, $max = 10)
    ];
});