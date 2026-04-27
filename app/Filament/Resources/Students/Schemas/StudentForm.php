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
                    ->description('Kursanta pamatinformācija un kontaktinformācija')
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

                        TextInput::make('address')
                            ->label('Adrese')
                            ->maxLength(255)
                            ->placeholder('Ievadiet dzīvesvietas adresi')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet adresi.',
                                'max' => 'Adrese nedrīkst pārsniegt 255 rakstzīmes.',
                            ])
                            ->required(),

                        TextInput::make('phone')
                            ->label('Telefons')
                            ->tel()
                            ->maxLength(255)
                            ->placeholder('Ievadiet telefona numuru')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet telefona numuru.',
                                'max' => 'Telefona numurs nedrīkst pārsniegt 255 rakstzīmes.',
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
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Profesionālā informācija')
                    ->description('Informācija par kursanta grupām un kategorijām')
                    ->columns(2)
                    ->schema([
                        Select::make('groups')
                            ->label('Grupas')
                            ->relationship(
                                name: 'group',
                                titleAttribute: 'name',
                                modifyQueryUsing: fn (Builder $query) => $query->where('start_date', '>', now())
                            )
                            ->multiple()
                            ->columns(2)
                            ->placeholder('Izvēlieties grupu')
                             ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties vismaz vienu grupu.',
                            ])
                            ->columnSpanFull()
                            ->required(),

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
