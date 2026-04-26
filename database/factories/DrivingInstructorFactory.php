<?php

namespace Database\Factories;

use App\Models\DrivingInstructor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DrivingInstructor>
 */
class DrivingInstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'personal_code' => $this->faker->unique()->numerify('######-#####'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'registered_since' => $this->faker->year(),
            'description' => $this->faker->sentence(8)
        ];
    }
}
