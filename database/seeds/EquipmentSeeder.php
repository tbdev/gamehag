<?php

use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = Faker\Factory::create('pl_PL');

        for ($i = 1; $i <= 3; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Chest',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 1
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 2; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Reward',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 1
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 3; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Rune',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 1
                ]);
        }

        $faker = Faker\Factory::create('pl_PL');

        for ($i = 1; $i <= 2; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Chest',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 2
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 1; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Reward',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 2
                ]);
        }

        $faker->unique($reset = true);

        for ($i = 1; $i <= 2; $i++) {
            DB::table('equipments')->insert([
                'equipmentable_type' => 'App\Models\Equipments\Rune',
                'equipmentable_id' => $faker->unique()->numberBetween(1, 10),
                'user_id' => 2
                ]);
        }
    
    }
}
