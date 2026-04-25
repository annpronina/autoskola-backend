<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\DrivingInstructor;
use App\Models\DrivingLesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DrivingLesson>
 */
class DrivingLessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'driving_instructor_id' => DrivingInstructor::factory(),
            'category_id' => Category::factory(),
            'date' => $this->faker->date(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time()
        ];
    }
}
