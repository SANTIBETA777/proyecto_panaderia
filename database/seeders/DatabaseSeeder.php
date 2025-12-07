<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Ejemplo de usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Aquí llamamos a todos los seeders que queremos ejecutar
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            AdminUserSeeder::class, // 👈 Añadido aquí
        ]);
    }
}
