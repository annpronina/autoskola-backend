<?php

namespace App\Filament\Resources\Groups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class GroupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Grupas nosaukums')
                    ->searchable()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('theoryTeacher.full_name')
                    ->label('Teorijas pasniedzējs')
                    ->searchable(['name', 'surname'])
                    ->alignCenter(),

                TextColumn::make('start_date')
                    ->label('Sākuma datums')
                    ->date('d.m.Y')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('end_date')
                    ->label('Beigu datums')
                    ->date('d.m.Y')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('lesson_count')
                    ->label('T. nodarbību skaits')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->sortable()
                    ->badge()
                    ->alignCenter(),

                TextColumn::make('status_id')
                    ->label('Statuss')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '1' => 'Plānota',
                        '2' => 'Aktīva',
                        '3' => 'Pabeigta',
                        '4' => 'Atcelta'
                    })
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'info',
                        '2' => 'warning',
                        '3' => 'success',
                        '4' => 'danger'
                    })
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('created_at')
                    ->label('Izveidots')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Atjaunināts')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status_id')
                    ->options([
                        1 => 'Plānota',
                        2 => 'Aktīva',
                        3 => 'Pabeigta',
                        4 => 'Atcelta'
                    ])
                    ->label('Statuss')
            ])
            ->recordActions([
                EditAction::make()
                    ->label('')
                    ->tooltip('Rediģēt'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
