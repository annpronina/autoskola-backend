<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
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
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'category_id' => Category::factory()
        ];
    }
}
