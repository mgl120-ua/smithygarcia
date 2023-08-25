<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Paneles']);
        Category::create(['name' => 'Jardín Vertical Sintético']);
        Category::create(['name' => 'Jardín Vertical Natural']);
    }
}

