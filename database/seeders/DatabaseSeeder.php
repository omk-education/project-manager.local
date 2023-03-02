<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::factory()
            ->count(1)
            ->create();

        User::factory()
            ->count(1)
            ->senior()
            ->create();

        User::factory()
            ->count(2)
            ->junior()
            ->hasTasks(10)
            ->create();

        User::factory()
            ->count(10)
            ->create();
    }
}
