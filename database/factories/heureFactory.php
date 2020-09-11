<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\heure;
use Faker\Generator as Faker;

$factory->define(heure::class, function (Faker $faker) {
    return [
        'dure'=>'8h-9h'
    ];
});
