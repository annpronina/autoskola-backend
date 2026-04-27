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
                TextColumn::make('starts_at')
                    ->label('Sākums')
                    ->dateTime('d.m.Y / H:i')
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->label('Beigas')
                    ->dateTime('d.m.Y / H:i')
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('drivingInstructor.full_name')
                    ->label('Braukšanas instruktors')
                    ->numeric()
                    ->searchable(['name', 'surname'])
                    ->alignCenter(),
                    
                TextColumn::make('student.full_name')
                    ->label('Kursants')
                    ->numeric()
                    ->searchable(['name', 'surname'])
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
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->searchable()
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
