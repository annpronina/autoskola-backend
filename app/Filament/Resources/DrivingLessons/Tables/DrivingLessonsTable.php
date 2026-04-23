<?php

namespace App\Filament\Resources\DrivingLessons\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DrivingLessonsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->label('Datums')
                    ->date('d.m.Y')
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('full_time')
                    ->label('Laiks')
                    ->getStateUsing(fn ($record) => "{$record->start_time} - {$record->end_time}")
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('drivingInstructor.full_name')
                    ->label('Braukšanas instruktors')
                    ->numeric()
                    ->alignCenter(),
                    
                TextColumn::make('student.full_name')
                    ->label('Kursants')
                    ->numeric()
                    ->alignCenter(),

                TextColumn::make('status_id')
                    ->label('Statuss')
                    ->badge()
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        '1' => 'Plānota',
                        '2' => 'Pabeigta',
                        '3' => 'Atcelta',
                        default => 'Nav norādīts',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'info',
                        '2' => 'success',
                        '3' => 'danger',
                        default => 'gray',
                    })
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->alignCenter(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
