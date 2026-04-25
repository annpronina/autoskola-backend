<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\TheoryLesson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TheoryLesson>
 */
class TheoryLessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_id' => Group::factory(),
            'starts_at' => Carbon::now(),
            'ends_at' => Carbon::now()->addHours(4),
            'lesson_number' => $this->faker->numberBetween(1, 20)
        ];
    }
}
