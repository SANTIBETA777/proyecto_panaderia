<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Moonshine\Models\MoonshineUser;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Sembrar categorías y productos
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);

        // Crear usuario admin directamente
        MoonshineUser::query()->firstOrCreate(
            ['email' => 'admin@panaderia.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('Panaderia123!'),
            ]
        );
    }
}
