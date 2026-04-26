<?php

namespace Database\Factories;

use App\Models\TheoryTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TheoryTeacher>
 */
class TheoryTeacherFactory extends Factory
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
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'registered_since' => $this->faker->year(),
            'description' => $this->faker->sentence(8)
        ];
    }
}
