<?php

namespace App\Filament\Resources\Students\Schemas;


use Filament\Forms\Components\Select;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Support\Enums\GridDirection;
use Illuminate\Database\Eloquent\Builder;

class StudentForm
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

                TextInput::make('address')
                    ->label('Adrese')
                    ->required()
                    ->maxLength(255),

                TextInput::make('phone')
                    ->label('Telefons')
                    ->tel()
                    ->maxLength(255)
                    ->required(),

                TextInput::make('email')
                    ->label('E-pasta adrese')
                    ->email()
                    ->required()
                    ->maxLength(255),

                CheckboxList::make('categories')
                    ->label('Kategorijas')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->required()
                    ->columns(2)
                    ->columnSpanFull()
                    ->gridDirection(GridDirection::Row),

                Select::make('groups')
                    ->label('Grupas')
                    ->relationship(
                        name: 'group',
                        titleAttribute: 'name',
                        modifyQueryUsing: fn (Builder $query) => $query->where('start_date', '>', now())
                    )
                    ->multiple()
                    ->required()
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
