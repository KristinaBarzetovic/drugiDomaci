<?php

namespace Database\Seeders;

use App\Models\ClotheCategory;
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
        ClotheCategory::create([
            'name' => 't-shirts'
        ]);
        ClotheCategory::create([
            'name' => 'pants'
        ]);
        ClotheCategory::create([
            'name' => 'sundresses'
        ]);
        ClotheCategory::create([
            'name' => 'jackets'
        ]);
        ClotheCategory::create([
            'name' => 'shoes'
        ]);
    }
}
