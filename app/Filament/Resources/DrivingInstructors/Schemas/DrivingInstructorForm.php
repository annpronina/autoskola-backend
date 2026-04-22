<?php

namespace App\Filament\Resources\DrivingInstructors\Schemas;


use Filament\Forms\Components\CheckboxList;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
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

                        TextInput::make('email')
                            ->label('E-pasta adrese')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('janis.berzins@example.com')
                            ->required(),

                        TextInput::make('phone')
                            ->label('Telefona numurs')
                            ->tel()
                            ->maxLength(255)
                            ->placeholder('Ievadiet telefona numuru')
                            ->required(),

                        TextInput::make('address')
                            ->label('Adrese')
                            ->maxLength(255)
                            ->placeholder('Ievadiet dzīvesvietas adresi')
                            ->required(),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Profesionālā informācija')
                    ->description('Informācija par instruktora darbu un piešķirtajām kategorijām')
                    ->columns(2)
                    ->schema([
                         Select::make('registered_since')
                            ->label('Braukšanas instruktors kopš')
                            ->required()
                            ->options(
                                collect(range(date('Y'), 2010))
                                ->mapWithKeys(fn ($year) => [$year => $year])
                            )
                            ->placeholder('Izvēlies gadu'),

                        Textarea::make('description')
                            ->label('Apraksts')
                            ->rows(4)
                            ->columnSpanFull()
                            ->maxLength(255)
                            ->placeholder('Papildus informācija par braukšanas instruktoru (nav obligāts)...'),

                        CheckboxList::make('categories')
                            ->label('Kategorijas')
                            ->relationship(name: 'categories', titleAttribute: 'name')
                            ->columns(4)
                            ->columnSpanFull()
                            ->gridDirection(GridDirection::Row)
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull()
                ]);
    }
}
