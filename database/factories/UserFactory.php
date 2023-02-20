<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'role' => 'user',
            'password' => bcrypt('password'), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(
            fn (array $attributes) => [
                'email_verified_at' => null,
            ]
        );
    }

    /**
     * Состояние для Ведущий программист (senior)
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function senior()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'email' => 'senior@test.ru',
                    'role' => 'senior',
                ];
            }
        );
    }

    /**
     * Состояние для программист (junior)
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function junior()
    {
        return $this->state(
            function (array $attributes) {
                return [
                    'role' => 'junior',
                ];
            }
        );
    }
}
