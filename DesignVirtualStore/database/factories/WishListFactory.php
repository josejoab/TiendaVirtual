<?php
/**
    *Autor: Kevin Herrera
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\WishList;
use Faker\Generator as Faker;



$factory->define(WishList::class, function (Faker $faker) {
    static $user = 1;
    return [
        'user_id'=>$user++
    ];
});


