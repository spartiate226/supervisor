<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\niveau;
use Faker\Generator as Faker;

$factory->define(niveau::class, function (Faker $faker) {
    return [
        "niveau"=>"premiere annee"
    ];
});
