<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use function Symfony\Component\Translation\t;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Vārds')
                    ->searchable(),

                TextColumn::make('surname')
                    ->label('Uzvārds')
                    ->searchable(),

                TextColumn::make('personal_code')
                    ->label('Personas kods')
                    ->searchable(),

                TextColumn::make('address')
                    ->label('Adrese')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Telefona numurs')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('E-pasta adrese')
                    ->searchable(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->searchable(),

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
