<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word() . ' Course',
            'description' => $this->faker->paragraph(3),
            'duration' => $this->faker->numberBetween(1, 48), // Duration in hours
            'price' => $this->faker->randomFloat(2, 9.99, 199.99),
            'instructor_id' => User::factory()->create()->id, // Generate an instructor
        ];
    }
}
