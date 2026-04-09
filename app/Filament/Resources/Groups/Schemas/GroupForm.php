<?php

namespace App\Filament\Resources\Groups\Schemas;

use Filament\Forms\Components\Select;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Grupas nosaukums')
                    ->required(),

                Textarea::make('description')
                    ->label('Apraksts')
                    ->rows(4)
                    ->maxLength(255)
                    ->columnSpanFull(),

                DatePicker::make('start_date')
                    ->label('Sākuma datums')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),

                DatePicker::make('end_date')
                    ->label('Beigu datums')
                    ->after('start_date')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),

                Select::make('category_id')
                    ->label('Kategorijas')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->required()
                    ->columns(2)
                    ->columnSpanFull(),

                Select::make('theory_teacher_id')
                    ->label('Teorijas pasniedzējs')
                    ->relationship(name: 'theoryTeacher', titleAttribute: 'name')
                    ->required()
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
