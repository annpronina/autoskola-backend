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
                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('drivingInstructor.full_name')
                    ->label('Braukšanas instruktors')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('date')
                    ->label('Datums')
                    ->date('d.m.Y')
                    ->sortable(),

                TextColumn::make('start_time')
                    ->label('Sākuma laiks')
                    ->time('H:i')
                    ->sortable(),

                TextColumn::make('end_time')
                    ->label('Beigu laiks')
                    ->time('H:i')
                    ->sortable(),
                    
                TextColumn::make('student.full_name')
                    ->label('Kursants')
                    ->numeric()
                    ->sortable(),

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
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
