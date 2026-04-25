<?php

namespace Database\Factories;

use App\Models\GroupStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<GroupStatus>
 */
class GroupStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
