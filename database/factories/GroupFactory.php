<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Group;
use App\Models\GroupStatus;
use App\Models\TheoryTeacher;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addMonths(2),
            'category_id' => Category::factory(),
            'theory_teacher_id' => TheoryTeacher::factory(),
            'status_id' => GroupStatus::factory(),
            'lesson_count' => $this->faker->numberBetween(10, 20)
        ];
    }
}
