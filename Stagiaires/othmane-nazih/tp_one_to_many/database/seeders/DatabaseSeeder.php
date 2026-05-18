<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Category::factory(5)->create()->each(function ($category) {
            Product::factory(rand(3, 6))->create(['category_id' => $category->id]);
        });
    }
}
