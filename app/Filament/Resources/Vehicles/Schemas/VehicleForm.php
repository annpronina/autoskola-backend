<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Pamata informācija')
                    ->description('Vispārīga informācija par transportlīdzekli')
                    ->columns(2)
                    ->schema([
                        TextInput::make('brand')
                            ->label('Marka')
                            ->maxLength(255)
                            ->placeholder('Piemēram: BMW, Audi, Toyota')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet marku.',
                                'max' => 'Marka nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('model')
                            ->label('Modelis')
                            ->maxLength(255)
                            ->placeholder('Piemēram: A4, Golf, Corolla')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet modeli.',
                                'max' => 'Modelis nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        Select::make('year')
                            ->label('Izlaiduma gads')
                            ->required()
                            ->options(
                                collect(range(date('Y'), 1980))
                                ->mapWithKeys(fn ($year) => [$year => $year])
                            )
                            ->placeholder('Izvēlies izlaiduma gadu')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties izlaiduma gadu.',
                            ]),
                        Select::make('category_id')
                            ->label('Kategorijas')
                            ->relationship(name: 'category', titleAttribute: 'name')
                            ->placeholder('Izvēlies transportlīdzekļa kategoriju')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties kategoriju.',
                            ])
                            ->required(),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Tehniskā informācija')
                    ->description('Transportlīdzekļa tehniskie parametri un tips')
                    ->columns(2)
                    ->schema([
                        Select::make('vehicle_transmission_id')
                            ->label('Transmisija')
                            ->options([
                                1 => 'Manuāls',
                                2 => 'Automāts'
                            ])
                            ->placeholder('Izvēlies transmisijas tipu'),

                        Select::make('vehicle_fuel_type_id')
                            ->label('Degvielas veids')
                            ->options([
                                1 => 'Dīzelis',
                                2 => 'Benzīns',
                                3 => 'Elektro'
                            ])
                            ->placeholder('Izvēlieties degvielas veidu'),

                        TextInput::make('number_plate')
                            ->label('Numurzīme')
                            ->maxLength(7)
                            ->unique(ignoreRecord: true)
                            ->placeholder('Piemēram: AB-1234')
                            ->validationMessages([
                                'unique' => 'Auto ar šādu numurzīmi jau eksistē.',
                                'required' => 'Lūdzu, ievadiet numurzīmi.',
                                'max' => 'Numurzīme ir par garu.',
                            ])
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
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties degvielas veidu.',
                            ])
                            ->required(),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),
            ]);
    }
}
