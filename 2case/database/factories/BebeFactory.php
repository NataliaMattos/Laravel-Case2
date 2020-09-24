<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Bebe::class, function (Faker $faker) {
        return [
            'nome' => $faker->name,
            'datanasc' =>  $faker->DateTime, 
            'peso' => $faker->randomFloat(2,1,5),
            'altura' => $faker->randomFloat(2,1,3),
            
        ];
    
});

