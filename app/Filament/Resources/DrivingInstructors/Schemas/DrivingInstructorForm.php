<?php

namespace App\Filament\Resources\DrivingInstructors\Schemas;


use Filament\Forms\Components\CheckboxList;
use Filament\Support\Enums\GridDirection;
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
                    ->description('Braukšanas instruktora pamatinformācija un kontaktinformācija')//typo
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Vārds')
                            ->maxLength(255)
                            ->placeholder('Ievadiet vārdu')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet vārdu.',
                                'max' => 'Vārds nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('surname')
                            ->label('Uzvārds')
                            ->maxLength(255)
                            ->placeholder('Ievadiet uzvārdu')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet uzvārdu.',
                                'max' => 'Uzvārds nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('personal_code')
                            ->label('Personas kods')
                            ->maxLength(255)
                            ->placeholder('Ievadiet personas kodu')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet personas kodu.',
                                'max' => 'Personas kods nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('email')
                            ->label('E-pasta adrese')
                            ->email()
                            ->maxLength(255)
                            ->placeholder('janis.berzins@example.com')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet e-pasta adresi.',
                                'email' => 'Lūdzu, ievadiet derīgu e-pasta adresi.',
                                'max' => 'E-pasta adrese nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('phone')
                            ->label('Telefona numurs')
                            ->tel()
                            ->maxLength(255)
                            ->placeholder('Ievadiet telefona numuru')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet telefona numuru.',
                                'max' => 'Telefona numurs nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('address')
                            ->label('Adrese')
                            ->maxLength(255)
                            ->placeholder('Ievadiet dzīvesvietas adresi')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet adresi.',
                                'max' => 'Adrese nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
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
                            ->options(
                                collect(range(date('Y'), 2010))
                                ->mapWithKeys(fn ($year) => [$year => $year])
                            )
                            ->placeholder('Izvēlies gadu')
                             ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties gadu.',
                            ])
                            ->required(),

                        Textarea::make('description')
                            ->label('Apraksts')
                            ->rows(4)
                            ->columnSpanFull()
                            ->maxLength(255)
                            ->placeholder('Papildus informācija par braukšanas instruktoru (nav obligāts)...')
                            ->validationMessages([
                                'max' => 'Apraksts nedrīkst pārsniegt 255 rakstzīmes.',
                            ]),

                        CheckboxList::make('categories')
                            ->label('Kategorijas')
                            ->relationship(name: 'categories', titleAttribute: 'name')
                            ->columns(4)
                            ->columnSpanFull()
                            ->gridDirection(GridDirection::Row)
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties vismaz vienu kategoriju.',
                            ])
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull()
                ]);
    }
}
