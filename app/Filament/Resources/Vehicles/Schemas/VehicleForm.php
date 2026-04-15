<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('brand')
                    ->label('Marka')
                    ->maxLength(255)
                    ->required(),

                TextInput::make('model')
                    ->label('Modelis')
                    ->maxLength(255)
                    ->required(),

                Select::make('year')
                    ->label('Izlaiduma gads')
                    ->required()
                    ->options(
                        collect(range(date('Y'), 1980))
                        ->mapWithKeys(fn ($year) => [$year => $year])
                    )
                    ->placeholder('Izvēlies gadu'),

                Select::make('vehicle_transmission_id')
                    ->label('Transmisija')
                    ->options([
                        1 => 'Manuāls',
                        2 => 'Automāts'
                    ])
                    ->required(),

                Select::make('vehicle_fuel_type_id')
                    ->label('Degvielas veids')
                    ->options([
                        1 => 'Dīzelis',
                        2 => 'Benzīns',
                        3 => 'Elektro'
                    ])
                    ->required(),

                Select::make('category_id')
                    ->label('Kategorijas')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->required(),

                ToggleButtons::make('vehicle_type_id')
                    ->label('Transportlīdzekļa tips')
                    ->options([
                        1 => 'Automašīna',
                        2 => 'Motocikls',
                        3 => 'Motorolleris',
                        4 => 'Piekabe'
                    ])
                    ->icons([
                        1 => Heroicon::OutlinedTruck,
                        2 => Heroicon::OutlinedBolt,
                        3 => Heroicon::OutlinedBolt,
                        4 => Heroicon::OutlinedArchiveBox
                    ])
                    ->colors([
                        1 => 'info',
                        2 => 'warning',
                        3 => 'success',
                        4 => 'danger'
                    ])
                    ->inline()
                    ->required(),
            ]);
    }
}
