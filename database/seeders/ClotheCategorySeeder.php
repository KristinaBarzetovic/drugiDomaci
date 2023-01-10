<?php

namespace Database\Seeders;

use App\Models\Clothe;
use Illuminate\Database\Seeder;

class ClotheCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clothe::create([
            'name' => 't-shirts'
        ]);
        Clothe::create([
            'name' => 'pants'
        ]);
        Clothe::create([
            'name' => 'sundresses'
        ]);
        Clothe::create([
            'name' => 'jackets'
        ]);
        Clothe::create([
            'name' => 'shoes'
        ]);
    }
}
