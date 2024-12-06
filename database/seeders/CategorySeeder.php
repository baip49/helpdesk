<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Categoría 1',
            'slug' => 'categoria-1',
        ]);

        Category::create([
            'name' => 'Categoría 2',
            'slug' => 'categoria-2',
        ]);

        Category::create([
            'name' => 'Categoría 3',
            'slug' => 'categoria-3',
        ]);
    }
}
