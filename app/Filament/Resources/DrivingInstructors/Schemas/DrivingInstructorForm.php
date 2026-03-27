<?php

namespace App\Filament\Resources\DrivingInstructors\Schemas;


use Filament\Forms\Components\CheckboxList;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DrivingInstructorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                    ->required(),

                TextInput::make('phone')
                    ->label('Telefona numurs')
                    ->tel()
                    ->required()
                    ->maxLength(255),

                TextInput::make('address')
                    ->label('Adrese')
                    ->required()
                    ->maxLength(255),

                DatePicker::make('registered_since')
                    ->label('Instruktors kopš')
                    ->required()
                    ->maxDate(now()),

                TextInput::make('vehicle')
                    ->label('Transportlīdzeklis')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Apraksts')
                    ->rows(4)
                    ->columnSpanFull(),

                CheckboxList::make('categories')
                    ->label('Kategorijas')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->required()
                    ->columns(2)
                    ->columnSpanFull()
                    ->gridDirection(GridDirection::Row),
            ]);
    }
}
