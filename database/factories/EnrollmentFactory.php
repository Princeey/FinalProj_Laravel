<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => fake()->numberBetween(1, 10), // Assuming 10 students exist
            'course_id' => fake()->numberBetween(1, 5), // Assuming 5 courses exist
            'enrollment_date' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
