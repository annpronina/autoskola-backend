<?php

namespace App\Filament\Resources\DrivingLessons\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class DrivingLessonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Kategorija')
                    ->relationship(name: 'category', titleAttribute: 'name')
                    ->required(),

                Select::make('driving_instructor_id')
                    ->label('Braukšanas instruktors')
                    ->native(false)
                    ->relationship(
                        name: 'drivingInstructor',
                        modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                    ->getOptionLabelFromRecordUsing(fn (Model $teacher) => "{$teacher->name} {$teacher->surname}")
                    ->required(),

                DatePicker::make('date')
                    ->label('Datums')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->required(),

                TimePicker::make('start_time')
                    ->label('Sākuma laiks')
                    ->format('H:i')
                    ->native(false)
                    ->timezone("Europe/Riga")
                    ->seconds(false)
                    ->required(),

                TimePicker::make('end_time')
                    ->label('Beigu laiks')
                    ->format('H:i')
                    ->native(false)
                    ->seconds(false)
                    ->after('start_time')
                    ->required(),

                Select::make('student_id')
                    ->label('Kursants')
                    ->native(false)
                    ->relationship(
                        name: 'student',
                        modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                    ->getOptionLabelFromRecordUsing(fn (Model $student) => "{$student->name} {$student->surname}")
                    ->required(),

                ToggleButtons::make('status_id')
                    ->label('Statuss')
                    ->options([
                        1 => 'Plānota',
                        2 => 'Pabeigta',
                        3 => 'Atcelta'
                    ])
                    ->icons([
                        1 => Heroicon::OutlinedClock,
                        2 => Heroicon::CheckCircle,
                        3 => Heroicon::XCircle
                    ])
                    ->colors([
                        1 => 'info',
                        2 => 'success',
                        3 => 'danger'
                    ])
                    ->inline()
            ]);
    }
}
