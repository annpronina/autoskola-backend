<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\DrivingInstructor;
use App\Models\DrivingLesson;
use App\Models\DrivingLessonStatus;
use App\Models\Student;
use Carbon\Carbon;
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
            'status_id' => DrivingLessonStatus::factory(),
            'student_id' => Student::factory(),
            'driving_instructor_id' => DrivingInstructor::factory(),
            'category_id' => Category::factory(),
            'starts_at' => Carbon::now(),
            'ends_at' => Carbon::now()->addHour()
        ];
    }
}
