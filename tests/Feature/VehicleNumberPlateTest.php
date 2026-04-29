<?php

use App\Filament\Resources\Vehicles\Pages\CreateVehicle;
use App\Filament\Resources\Vehicles\Pages\EditVehicle;
use App\Models\Vehicle;
use Livewire\Livewire;

it('can edit vehicle without triggering unique number plate against itself', function () {
    $vehicle = Vehicle::factory()->create();

    Livewire::test(EditVehicle::class, ['record' => $vehicle->getRouteKey()])
        ->fillForm(['number_plate' => $vehicle->number_plate])
        ->call('save')
        ->assertHasNoFormErrors();
});

it('cannot create two vehicles with the same number plate', function () {
    $existing = Vehicle::factory()->create(['number_plate' => 'AB-1234']);

    Livewire::test(CreateVehicle::class)
        ->fillForm(['number_plate' => $existing->number_plate])
        ->call('create')
        ->assertHasFormErrors(['number_plate' => 'unique']);
});