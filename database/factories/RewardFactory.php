<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipments\Reward;
use Faker\Generator as Faker;

$factory->define(Reward::class, function (Faker $faker) {
    return [
        //
        'name' => 'Reward-' . $faker->word,
        'price' => $faker->randomFloat(2, 10, 100),
        'code' => $faker->unique()->bothify('code-###???'),
        'status' => $faker->randomElement([0,1,2]),
    ];
});
