<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                // Ensure you have instructors first
                User::factory(5)->create(['type' => 'instructor'])->each(function ($instructor) {
                    Course::factory(2)->create(['instructor_id' => $instructor->id]);
                });

    }
}
