<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Equipments\Rune;
use Faker\Generator as Faker;

$factory->define(Rune::class, function (Faker $faker) {
    return [
        'name' => 'Rune' . $faker->word,
        'price' => $faker->randomFloat(2, 10, 100),
        'bonus' => $faker->word // class (model)
    ];
});
