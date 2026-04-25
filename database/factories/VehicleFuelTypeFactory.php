<?php

namespace Database\Factories;

use App\Models\VehicleFuelType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VehicleFuelType>
 */
class VehicleFuelTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fuel_type' => $this->faker->word()
        ];
    }
}
