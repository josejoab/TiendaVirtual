<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
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
$factory->define(Order::class, function (Faker $faker) {
    return [
        'paymentType' => $faker->creditCardType,
        'totalPrice' => $faker->numberBetween($min = 200, $max = 900000),
        'userId'=>$faker->numberBetween($min = 1, $max = 22)
    ];
});