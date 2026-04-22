<?php

namespace App\Filament\Widgets;

use App\Models\Group;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestGroups extends TableWidget
{
    protected int | string | array $columnSpan = 1;

    protected static ?string $heading = 'Jaunākās grupas';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Group::orderBy('created_at', 'desc')
                    ->limit(5)
            )
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->label('Nosaukums'),

                TextColumn::make('category.name')
                    ->label('Kategorija'),

                TextColumn::make('groupStatus.name')
                    ->label('Statuss'),

                TextColumn::make('start_date')
                    ->label('Sākums')
                    ->date('d.m.Y'),
            ]);
    }
}
