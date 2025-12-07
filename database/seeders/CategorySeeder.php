<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::firstOrCreate(
            ['slug' => 'pan-fresco'], // 👈 clave única
            [
                'name' => 'Pan fresco',
                'description' => 'Panes recién horneados cada mañana',
            ]
        );

        Category::firstOrCreate(
            ['slug' => 'pasteles'],
            [
                'name' => 'Pasteles',
                'description' => 'Deliciosos pasteles artesanales',
            ]
        );

        Category::firstOrCreate(
            ['slug' => 'galletas'],
            [
                'name' => 'Galletas',
                'description' => 'Crujientes galletas caseras',
            ]
        );
    }
}
