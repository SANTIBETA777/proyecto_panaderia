<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Aquí llamamos a todos los seeders que queremos ejecutar
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            AdminUserSeeder::class, // 👈 añadimos el seeder del admin
        ]);
    }
}
