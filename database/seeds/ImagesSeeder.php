<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('images')->insert([
                'imageable_type' => 'App\Models\Equipments\Chest',
                'imageable_id' => $faker->unique()->numberBetween(1, 10),
                'path' => $faker->bothify('?#?#?.jpg')
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('images')->insert([
                'imageable_type' => 'App\Models\Equipments\Reward',
                'imageable_id' => $faker->unique()->numberBetween(1, 10),
                'path' => $faker->bothify('?#?#?.jpg')
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 10; $i++) {
            DB::table('images')->insert([
                'imageable_type' => 'App\Models\Equipments\Rune',
                'imageable_id' => $faker->unique()->numberBetween(1, 10),
                'path' => $faker->bothify('?#?#?.jpg')
                ]);
        }
    }
}