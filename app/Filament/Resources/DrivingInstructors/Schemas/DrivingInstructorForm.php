<?php

namespace App\Filament\Resources\DrivingInstructors\Schemas;


use Filament\Forms\Components\CheckboxList;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DrivingInstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Personas informācija')
                    ->description('Braukšanas instruktora pamainformācija un kontaktinformācija')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Vārds')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('surname')
                            ->label('Uzvārds')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('personal_code')
                            ->label('Personas kods')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->label('E-pasta adrese')
                            ->email()
                            ->required()
                            ->maxLength(255),

                        TextInput::make('phone')
                            ->label('Telefona numurs')
                            ->tel()
                            ->required()
                            ->maxLength(255),

                        TextInput::make('address')
                            ->label('Adrese')
                            ->required()
                            ->maxLength(255),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Profesionālā informācija')
                    ->description('Informācija par instruktora darbu un piešķirtajām kategorijām')
                    ->columns(2)
                    ->schema([
                        TextInput::make('vehicle')
                            ->label('Transportlīdzeklis')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('registered_since')
                            ->label('Instruktors kopš')
                            ->required()
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->maxDate(now()),

                        Textarea::make('description')
                            ->label('Apraksts')
                            ->rows(4)
                            ->columnSpanFull()
                            ->maxLength(255),

                        CheckboxList::make('categories')
                            ->label('Kategorijas')
                            ->relationship(name: 'categories', titleAttribute: 'name')
                            ->required()
                            ->columns(4)
                            ->columnSpanFull()
                            ->gridDirection(GridDirection::Row)
                        ])
                        ->collapsible()
                        ->columnSpanFull()
                ]);
    }
}
