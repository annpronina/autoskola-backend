<?php

namespace App\Filament\Resources\Administrators\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AdministratorForm
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

                TextInput::make('phone')
                    ->label('Telefons')
                    ->tel()
                    ->required()
                    ->maxLength(255),

                TextInput::make('address')
                    ->label('Adrese')
                    ->required()
                    ->maxLength(255),

                TextInput::make('position')
                    ->label('Pozīcija')
                    ->required(),
            ]);
    }
}
