<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Equipments\Chest;
use Faker\Generator as Faker;

$factory->define(Chest::class, function (Faker $faker) {
    return [
        'name' => 'Chest-' . $faker->word,
        'price' => $faker->randomFloat(2, 10, 100)
    ];
});
