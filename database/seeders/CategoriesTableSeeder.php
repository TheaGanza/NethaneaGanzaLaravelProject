<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Pastry', 'description' => 'Sweet and savoury baked goods'],
            ['id' => 2, 'name' => 'Candy', 'description' => 'Confections made with sugar.'],
            ['id' => 3, 'name' => 'Pasta', 'description' => 'Resources for students and teachers.'],
        ]);
    }
}
