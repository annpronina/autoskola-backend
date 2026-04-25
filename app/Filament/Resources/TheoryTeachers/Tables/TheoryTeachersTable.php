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
                    ->searchable(['name', 'surname'])
                    ->alignCenter(),
                    
                TextColumn::make('personal_code')
                    ->label('Personas kods')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('phone')
                    ->label('Telefona numurs')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('email')
                    ->label('E-pasta adrese')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('address')
                    ->label('Adrese')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('registered_since')
                    ->label('Pasniedz kopš')
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('categories.name')
                    ->label('Kategorijas')
                    ->numeric()  
                    ->alignCenter()
                    ->badge(),

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
