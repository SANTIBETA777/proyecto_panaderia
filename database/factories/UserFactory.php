<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    protected static ?string $password;

    public function definition(): array
    {
        // Si $this->faker es null (en producción sin faker), usamos valores por defecto
        return [
            'name' => $this->faker?->name() ?? 'Usuario ' . Str::upper(Str::random(6)),
            'email' => $this->faker?->unique()->safeEmail() ?? Str::lower(Str::random(8)) . '@example.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
