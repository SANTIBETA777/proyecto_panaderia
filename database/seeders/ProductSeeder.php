<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(
            ['slug' => 'pan-frances'], // 👈 clave única
            [
                'category_id' => 1,
                'name' => 'Pan francés',
                'description' => 'Crujiente por fuera, suave por dentro',
                'price' => 1200,
                'is_active' => true,
            ]
        );

        Product::firstOrCreate(
            ['slug' => 'croissant'],
            [
                'category_id' => 1,
                'name' => 'Croissant',
                'description' => 'Deliciosa masa hojaldrada con mantequilla',
                'price' => 2500,
                'is_active' => true,
            ]
        );

        Product::firstOrCreate(
            ['slug' => 'galleta-chocolate'],
            [
                'category_id' => 3,
                'name' => 'Galleta de chocolate',
                'description' => 'Galleta casera con trozos de chocolate',
                'price' => 1500,
                'is_active' => true,
            ]
        );
    }
}
