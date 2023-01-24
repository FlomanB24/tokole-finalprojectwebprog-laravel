<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //Category 1
        Category::create([
            'category_name' => 'Makanan dan Minuman'
        ]);

        //Category 2
        Category::create([
            'category_name' => 'Kerajinan Tangan'
        ]);

        //Category 3
        Category::create([
            'category_name' => 'Pakaian'
        ]);
    }
}
