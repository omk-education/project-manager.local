<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()
            ->count(1)
            ->senior()
            ->create();

        User::factory()
            ->count(2)
            ->junior()
            ->create();

        User::factory()
            ->count(10)
            ->create();
    }
}
