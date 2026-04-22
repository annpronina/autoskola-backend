<?php

namespace App\Filament\Resources\Students\Schemas;


use Filament\Forms\Components\Select;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Enums\GridDirection;
use Illuminate\Database\Eloquent\Builder;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Personas informācija')
                    ->description('Kursanta pamainformācija un kontaktinformācija')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Vārds')
                            ->maxLength(255)
                            ->placeholder('Ievadiet vārdu')
                            ->required(),

                        TextInput::make('surname')
                            ->label('Uzvārds')
                            ->maxLength(255)
                            ->placeholder('Ievadiet uzvārdu')
                            ->required(),

                        TextInput::make('personal_code')
                            ->label('Personas kods')
                            ->maxLength(255)
                            ->placeholder('Ievadiet personas kodu')
                            ->required(),

                        TextInput::make('address')
                            ->label('Adrese')
                            ->maxLength(255)
                            ->placeholder('Ievadiet dzīvesvietas adresi')
                            ->required(),

                        TextInput::make('phone')
                            ->label('Telefons')
                            ->tel()
                            ->maxLength(255)
                            ->placeholder('Ievadiet telefona numuru')
                            ->required(),

                        TextInput::make('email')
                            ->label('E-pasta adrese')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('janis.berzins@example.com')
                            ->required(),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Profesionālā informācija')
                    ->description('Informācija par kursanta grupām un kategorijām')
                    ->columns(2)
                    ->schema([
                        CheckboxList::make('categories')
                            ->label('Kategorijas')
                            ->relationship(name: 'categories', titleAttribute: 'name')
                            ->required()
                            ->columns(4)
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
                            ->placeholder('Izvēlieties grupu')
                            ->columnSpanFull(),

                        ])
                        ->collapsible()
                        ->columnSpanFull()
            ]);
    }
}
