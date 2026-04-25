<?php

namespace Database\Factories;

use App\Models\VehicleTransmission;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<VehicleTransmission>
 */
class VehicleTransmissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transmission' => $this->faker->word()
        ];
    }
}
