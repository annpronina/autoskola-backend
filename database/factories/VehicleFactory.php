<?php

namespace Database\Factories;

use App\Filament\Resources\Categories\Tables\CategoriesTable;
use App\Models\Category;
use App\Models\Vehicle;
use App\Models\VehicleFuelType;
use App\Models\VehicleTransmission;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_type_id' => VehicleType::factory(),
            'brand' => $this->faker->company(),
            'model' => $this->faker->word(),
            'number_plate' => strtoupper($this->faker->bothify('??-####')),
            'year' => $this->faker->numberBetween(1980, 2026),
            'vehicle_transmission_id' => VehicleTransmission::factory(),
            'vehicle_fuel_type_id' => VehicleFuelType::factory(),
            'category_id' => Category::factory()
        ]; 
    }
}
