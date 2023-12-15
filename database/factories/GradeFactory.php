<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'enrollment_id' => fake()->numberBetween(1, 20), // Assuming 20 enrollments exist
            'grade' => fake()->randomElement(['A', 'B', 'C', 'D', 'F']),
            'exam_date' => fake()->dateTimeBetween('-6 months', 'now'),
        ];
    }
}
