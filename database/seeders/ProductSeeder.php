<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'category_id' => 1,
            'name' => 'Pan francés',
            'slug' => 'pan-frances',
            'description' => 'Crujiente por fuera, suave por dentro',
            'price' => 1200,
            'is_active' => true,
        ]);

        Product::create([
            'category_id' => 1,
            'name' => 'Croissant',
            'slug' => 'croissant',
            'description' => 'Hojaldre mantequilloso y dorado',
            'price' => 3500,
            'is_active' => true,
        ]);

        Product::create([
            'category_id' => 2,
            'name' => 'Torta de chocolate',
            'slug' => 'torta-chocolate',
            'description' => 'Bizcocho húmedo con cobertura de cacao',
            'price' => 15000,
            'is_active' => true,
        ]);
    }
}
