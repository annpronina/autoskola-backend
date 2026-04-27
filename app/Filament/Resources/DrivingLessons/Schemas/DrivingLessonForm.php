<?php

namespace App\Filament\Resources\DrivingLessons\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
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
                Section::make('Pamata informācija')
                    ->description('Pamatinformācija par braukšanas nodarbību')
                    ->columns(2)
                    ->schema([
                        Select::make('category_id')
                            ->label('Kategorija')
                            ->relationship(name: 'category', titleAttribute: 'name')
                            ->native(false)
                            ->placeholder('Izvēlieties kategoriju')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties kategoriju.',
                            ])
                            ->required(),

                        Select::make('driving_instructor_id')
                            ->label('Braukšanas instruktors')
                            ->native(false)
                            ->relationship(
                                name: 'drivingInstructor',
                                modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                            ->getOptionLabelFromRecordUsing(fn (Model $teacher) => "{$teacher->name} {$teacher->surname}")
                            ->placeholder('Izvēlieties instruktoru')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties braukšanas instruktoru.',
                            ])
                            ->required(),

                        Select::make('student_id')
                            ->label('Kursants')
                            ->native(false)
                            ->relationship(
                                name: 'student',
                                modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                            ->getOptionLabelFromRecordUsing(fn (Model $student) => "{$student->name} {$student->surname}")
                            ->placeholder('Izvēlieties kursantu')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties kursantu.',
                            ])
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
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties statusu.',
                            ])
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Nodarbības informācija')
                    ->description('Braukšanas nodarbības laiks un datums')
                    ->columns(2)
                    ->schema([
                        DateTimePicker::make('starts_at')
                            ->label('Sākuma laiks')
                            ->format('H:i')
                            ->native(false)
                            ->seconds(false)
                            ->placeholder('Izvēlieties nodarbības sākuma laiku.')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties sākuma laiku.',
                            ])
                            ->required(),

                        DateTimePicker::make('ends_at')
                            ->label('Beigu laiks')
                            ->format('H:i')
                            ->native(false)
                            ->seconds(false)
                            ->after('start_time')
                            ->placeholder('Izvēlieties nodarbības beigu laiku.')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties beigu laiku.',
                                'after' => 'Beigu laikam jābūt pēc sākuma laika.',
                            ])
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull(),
            ]);
    }
}
