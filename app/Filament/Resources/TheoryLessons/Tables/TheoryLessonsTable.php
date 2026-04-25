<?php

namespace App\Filament\Resources\TheoryLessons\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TheoryLessonsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('group.name')
                    ->label('Grupa')
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('group.theoryTeacher.full_name')
                    ->label('Teorijas pasniedzējs')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('starts_at')
                    ->label('Sākums')
                    ->dateTime('H:i / d.m.Y')
                    ->alignCenter()
                    ->sortable(),

                TextColumn::make('ends_at')
                    ->label('Beigas')
                    ->dateTime('H:i / d.m.Y')
                    ->alignCenter()
                    ->sortable(),
                    
                TextColumn::make('lesson_number')
                    ->label('Nodarbības kārtas nr.')
                    ->numeric()
                    ->alignCenter()
                    ->getStateUsing(fn ($record) => "{$record->lesson_number}.nod. / {$record->group?->lesson_count}.nod")
                    ->sortable(),

                TextColumn::make('group.category.name')
                    ->label('Kategorija')
                    ->sortable()
                    ->searchable()
                    ->badge()
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
