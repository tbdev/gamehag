<?php

use Illuminate\Database\Seeder;
use App\Models\Equipments\Chest;

class ChestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Equipments\Chest::class, 10)->create();
    }
}
