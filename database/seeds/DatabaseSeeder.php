<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ChestsSeeder::class,
            RewardsSeeder::class,
            RunesSeeder::class,
            ImagesSeeder::class,
        ]);
    }
}
