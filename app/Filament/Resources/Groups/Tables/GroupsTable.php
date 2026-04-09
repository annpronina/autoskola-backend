<?php

namespace App\Filament\Resources\Groups\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GroupsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Grupas nosaukums')
                    ->searchable(),

                TextColumn::make('start_date')
                    ->label('Sākuma datums')
                    ->date()
                    ->sortable(),

                TextColumn::make('end_date')
                    ->label('Beigu datums')
                    ->date()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('theoryTeacher.name')
                    ->label('Teorijas pasniedzējs')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime('d.m.Y H:i')
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
