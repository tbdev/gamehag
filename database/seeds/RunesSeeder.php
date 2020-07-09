<?php

use Illuminate\Database\Seeder;

class RunesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Equipments\Rune::class, 10)->create();
    }
}
