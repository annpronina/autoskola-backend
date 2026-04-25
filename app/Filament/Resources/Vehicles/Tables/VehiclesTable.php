<?php

namespace App\Filament\Resources\Vehicles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vehicleType.type')
                    ->label('Transportlīdzekļa tips')
                    ->searchable()
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('brand')
                    ->label('Marka')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('model')
                    ->label('Modelis')
                    ->searchable()
                    ->alignCenter(),

                TextColumn::make('year')
                    ->label('Gads')
                    
                    ->sortable()
                    ->alignCenter(),

                TextColumn::make('vehicleTransmission.transmission') 
                    ->label('Transmisija') 
                    ->searchable() 
                    ->sortable() 
                    ->alignCenter() 
                    ->placeholder('Nav norādīts'),

                TextColumn::make('vehicleFuelType.fuel_type') 
                    ->label('Degviela')
                    ->searchable()
                    ->sortable() 
                    ->alignCenter() 
                    ->placeholder('Nav norādīts'),

                TextColumn::make('number_plate')
                    ->label('Numura zīme')
                    ->searchable()
                    ->alignCenter()
                    ->badge()
                    ->color('info'),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->numeric()
                    ->sortable()
                    ->alignCenter()
                    ->badge(),

                TextColumn::make('created_at')
                    ->label('Izveidots')
                    ->dateTime('d.m.Y H:')
                    ->sortable()
                    ->alignCenter()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Atjaunināts')
                    ->dateTime('d.m.Y H:')
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
