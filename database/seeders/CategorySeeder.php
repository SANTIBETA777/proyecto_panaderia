<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Pan fresco',
            'slug' => 'pan-fresco',
            'description' => 'Panes recién horneados cada mañana',
        ]);

        Category::create([
            'name' => 'Pastelería',
            'slug' => 'pasteleria',
            'description' => 'Tortas, postres y dulces artesanales',
        ]);

        Category::create([
            'name' => 'Bebidas',
            'slug' => 'bebidas',
            'description' => 'Café, chocolate y jugos naturales',
        ]);
    }
}
