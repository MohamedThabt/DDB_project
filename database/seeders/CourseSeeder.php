<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 5 instructors
        $instructors = User::factory()->count(5)->create();
        
        // Create 3 courses for each instructor
        $instructors->each(function ($instructor) {
            Course::factory()
                ->count(3)
                ->for($instructor, 'instructor')
                ->create();
        });
    }
}
