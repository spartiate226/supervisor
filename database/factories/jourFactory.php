<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\jour;
use Faker\Generator as Faker;

$factory->define(jour::class, function (Faker $faker) {
    return [
        "nom"=>"lundi"
    ];
});
