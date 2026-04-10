<?php

namespace App\Filament\Resources\Groups\Schemas;

use Filament\Forms\Components\Select;
use Filament\Support\Enums\GridDirection;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class GroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Grupas nosaukums')
                    ->required()
                    ->columns(1),

                Select::make('category_id')
                    ->label('Kategorijas')
                    ->relationship(name: 'category', titleAttribute: 'name')
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

                Select::make('theory_teacher_id')
                    ->label('Teorijas pasniedzējs')
                    ->native(false)
                    ->relationship(
                        name: 'theoryTeacher',
                        modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                    ->getOptionLabelFromRecordUsing(fn (Model $teacher) => "{$teacher->name} {$teacher->surname}")
                    ->required(),

                ToggleButtons::make('status_id')
                    ->label('Statuss')
                    ->options([
                        1 => 'Plānota',
                        2 => 'Aktīva',
                        3 => 'Pabeigta',
                        4 => 'Atcelta'
                    ])
                    ->icons([
                        1 => Heroicon::OutlinedClock,
                        2 => Heroicon::OutlinedPlay,
                        3 => Heroicon::CheckCircle,
                        4 => Heroicon::XCircle
                    ])
                    ->colors([
                        1 => 'info',
                        2 => 'warning',
                        3 => 'success',
                        4 => 'danger'
                    ])
                    ->inline()
            ]);
    }
}
