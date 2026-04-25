<?php

namespace Database\Factories;

use App\Models\DrivingLessonStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DrivingLessonStatus>
 */
class DrivingLessonStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word()
        ];
    }
}
