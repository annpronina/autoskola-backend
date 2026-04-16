<?php

namespace App\Filament\Resources\TheoryTeachers\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TheoryTeachersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('Vārds, Uzvārds')
                    ->getStateUsing(fn ($record) => "{$record->name} {$record->surname}")
                    ->searchable(['name', 'surname']),
                    
                TextColumn::make('personal_code')
                    ->label('Personas kods')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('E-pasta adrese')
                    ->searchable(),

                TextColumn::make('address')
                    ->label('Adrese')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Telefons')
                    ->searchable(),

                TextColumn::make('registered_since')
                    ->label('Pasniedz kopš')
                    ->date('Y')
                    ->sortable(),

                TextColumn::make('categories.name')
                    ->label('Kategorijas')
                    ->numeric()
                    ->separator(',')
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
