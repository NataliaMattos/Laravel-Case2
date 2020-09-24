<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Medico::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'crm' => $faker->unique()->randomDigit,
        'telefone' => $faker->PhoneNumber,
        'especialidade' =>  $faker->text, 
    ];
});


