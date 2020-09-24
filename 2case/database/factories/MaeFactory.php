<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Mae::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'endereço' => $faker->unique()->Address,
        'telefone' => $faker->randomDigit,
        'datanasc' =>  $faker->DateTime, 
    ];
});

