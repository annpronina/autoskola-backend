<?php

namespace App\Filament\Resources\TheoryLessons\Schemas;

use App\Models\Group;
use Closure;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class TheoryLessonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Pamata informācija')
                    ->description('Informācija par teorijas nodarbību')
                    ->columns(2)
                    ->schema([
                        Select::make('group_id')
                            ->label('Grupas')
                            ->relationship(
                                name: 'group',
                                titleAttribute: 'name'
                            )
                            ->required()
                            ->columns(2)
                            ->columnSpanFull()
                            ->placeholder('Izvēlieties grupu')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties grupu.',
                            ]),

                        TextInput::make('lesson_number')
                            ->label('Nodarbības kārtas numurs')
                            ->numeric()
                            ->unique(ignoreRecord: true)
                            ->placeholder('Ievadiet nodarbības kārtas numuru')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet nodarbības kārtas numuru.',
                                'unique' => 'Šāds nodarbības numurs šai grupai jau eksistē.',
                                'numeric' => 'Nodarbības numuram jābūt skaitlim.',
                            ])
                            ->required()
                            ->rules([
                                fn (Get $get): Closure => function (string $attributes, $value, Closure $fail) use ($get) {
                                    if (Group::find($get('group_id'))?->lesson_count < $value) {
                                        $fail("Pārsniedz grupas nodarbību skaitu");
                                    }
                                },
                            ])
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Nodarbības informācija')
                    ->description('Teorijas nodarbības laiks un datums')
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('starts_at')
                            ->label('Nodarbības sākums')
                            ->seconds(false)
                            ->native(false)
                            ->placeholder('Izvēlieties sākuma datumu un laiku')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties sākuma laiku.',
                            ])
                            ->required(),

                        DateTimePicker::make('ends_at')
                            ->label('Nodarbības beigas')
                            ->seconds(false)
                            ->native(false)
                            ->after('starts_at')
                            ->placeholder('Izvēlieties beigu datumu un laiku')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties beigu laiku.',
                                'after' => 'Beigu laikam jābūt pēc sākuma laika.'
                            ])
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull(),
            ]);
    }
}
