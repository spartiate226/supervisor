<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\salle;
use Faker\Generator as Faker;

$factory->define(salle::class, function (Faker $faker) {
    return [
        'salle'=>'amphi A'
    ];
});
