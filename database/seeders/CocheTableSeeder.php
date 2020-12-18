<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coche;

class CocheTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coche::factory()->times(5)->create();
    }
}
