<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\matiere;
use Faker\Generator as Faker;

$factory->define(matiere::class, function (Faker $faker) {
    return [
        "nom"=>"chirurgie"
    ];
});
