<?php

namespace App\Filament\Resources\Students\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class StudentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->label('Vārds, Uzvārds')
                    ->getStateUsing(fn ($record) => "{$record->name} {$record->surname}")
                    ->searchable(['name', 'surname'])
                    ->alignCenter()
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('name', $direction)
                            ->orderBy('surname', $direction);
                    }),
        
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

                TextColumn::make('categories.name')
                    ->label('Kategorijas')
                    ->searchable()
                    ->alignCenter()
                    ->badge(),
                
                TextColumn::make('group.name')
                    ->label('Grupa')
                    ->alignCenter()
                    ->badge()
                    ->color('info'),

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
