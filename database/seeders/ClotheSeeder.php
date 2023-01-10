<?php

namespace Database\Seeders;

use App\Models\Clothe;
use Illuminate\Database\Seeder;

class ClotheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clothe::factory(50)->create();
    }
}
