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
                    ->required(),

                TextInput::make('surname')
                    ->label('Uzvārds')
                    ->required(),

                TextInput::make('personal_code')
                    ->label('Personas kods')
                    ->required(),

                TextInput::make('email')
                    ->label('E-pasta adrese')
                    ->email()
                    ->required(),

                TextInput::make('phone')
                    ->label('Telefons')
                    ->tel()
                    ->required(),

                TextInput::make('address')
                    ->label('Adrese')
                    ->required(),

                TextInput::make('position')
                    ->label('Pozīcija')
                    ->required(),
            ]);
    }
}
