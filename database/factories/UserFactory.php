<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'              => fake()->name(),
            'username'          => fake()->unique()->userName(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => '123456', // auto hash by mutator
            'role'              => 'guest',
            'remember_token'    => Str::random(10),
        ];
    }

    public function peserta(): static
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'peserta',
            'password' => '123456',
        ]);
    }

    public function admin(): static
    {
        return $this->state(fn (array $attributes) => [
            'role'     => 'admin',
            'name'     => 'Harman Hariady',
            'username' => 'mando',
            'email'    => 'mando@gmail.com',
            'password' => 'Sumda#0046',
        ]);
    }
}
