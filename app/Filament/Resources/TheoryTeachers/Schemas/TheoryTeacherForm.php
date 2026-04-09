<?php

namespace App\Filament\Resources\TheoryTeachers\Schemas;

use Filament\Forms\Components\CheckboxList;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TheoryTeacherForm
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
                    ->required()
                    ->maxLength(255),

                TextInput::make('address')
                    ->label('Adrese')
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Telefons')
                    ->tel()
                    ->required()
                    ->maxLength(255),

                DatePicker::make('registered_since')
                    ->label('Pasniedz kopš')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),

                CheckboxList::make('categories')
                    ->label('Kategorijas')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->required()
                    ->columns(2)
                    ->columnSpanFull()
                    ->gridDirection(GridDirection::Row),

                Textarea::make('description')
                    ->label('Apraksts')
                    ->columnSpanFull()
                    ->rows(4)
                    ->maxLength(255),
            ]);
    }
}
