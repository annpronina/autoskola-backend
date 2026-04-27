<?php

namespace App\Filament\Resources\Groups\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Section;
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
                 Section::make('Pamata informācija')
                    ->description('Pamatinformācija par grupu')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Grupas nosaukums')
                            ->maxLength(255)
                            ->placeholder('Ievadiet grupas nosaukumu (AM-2026-04)')
                            ->unique(ignoreRecord: true)
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet grupas nosaukumu.',
                                'max' => 'Grupas nosaukums nedrīkst pārsniegt 255 rakstzīmes.',
                                'unique' => 'Grupa ar šādu nosaukumu jau eksistē.',
                            ])
                            ->required(),

                        Select::make('theory_teacher_id')
                            ->label('Teorijas pasniedzējs')
                            ->native(false)
                            ->relationship(
                                name: 'theoryTeacher',
                                modifyQueryUsing: fn (Builder $query) => $query->orderBy('name')->orderBy('surname'))
                            ->getOptionLabelFromRecordUsing(fn (Model $teacher) => "{$teacher->name} {$teacher->surname}")
                            ->placeholder('Izvēlieties teorijas pasniedzēju')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties teorijas pasniedzēju.',
                            ])
                            ->required(),

                        Select::make('category_id')
                            ->label('Kategorijas')
                            ->relationship(name: 'category', titleAttribute: 'name')
                            ->placeholder('Izvēlieties kategoriju')
                            ->native(false)
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties kategoriju.',
                            ])
                            ->required(),

                        TextInput::make('lesson_count')
                            ->label('Nodarbību skaits')
                            ->numeric()
                            ->placeholder('Ievadiet nodarbību skaitu')
                            ->validationMessages([
                                'required' => 'Lūdzu, ievadiet nodarbības skaitu.',
                                'numeric' => 'Nodarbības numuram jābūt skaitlim.',
                            ])
                            ->required(),

                        Textarea::make('description')
                            ->label('Apraksts')
                            ->rows(4)
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->placeholder('Ievadiet papildu informāciju par grupu (nav obligāts)...')
                            ->validationMessages([
                                'max' => 'Apraksts nedrīkst pārsniegt 255 rakstzīmes.',
                            ]),

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
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties statusu.'
                            ])
                            ->required(),
                        ])
                        ->collapsible()
                        ->columnSpanFull(),

                Section::make('Nodarbības informācija')
                    ->description('Grupas norises datums')
                    ->columns(2)
                    ->schema([
                            DatePicker::make('start_date')
                            ->label('Sākuma datums')
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->placeholder('Izvēlieties sākuma datumu')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties sākuma datumu.',
                            ])
                            ->required(),

                        DatePicker::make('end_date')
                            ->label('Beigu datums')
                            ->after('start_date')
                            ->native(false)
                            ->displayFormat('d/m/Y')
                            ->placeholder('Izvēlieties beigu datumu')
                            ->validationMessages([
                                'required' => 'Lūdzu, izvēlieties beigu datumu.',
                                'after' => 'Beigu datumam jābūt pēc sākuma datuma.'
                            ])
                            ->required()
                        ])
                        ->collapsible()
                        ->columnSpanFull(),
            ]);
    }
}
