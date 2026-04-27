<?php

namespace App\Filament\Widgets;

use App\Models\Group;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

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
            ->headerActions([
                Action::make('view_all')
                    ->label('Skatīt visas')
                    ->url(fn () => route('filament.admin.resources.groups.index'))
                    ->icon('heroicon-o-arrow-right')
                    ->color('gray'),
            ])
            ->columns([
                TextColumn::make('name')
                    ->label('Nosaukums')
                    ->alignCenter(),

                TextColumn::make('category.name')
                    ->label('Kategorija')
                    ->alignCenter(),

                TextColumn::make('groupStatus.name')
                    ->label('Statuss')
                    ->alignCenter(),

                TextColumn::make('start_date')
                    ->label('Sākums')
                    ->date('d.m.Y')
                    ->alignCenter(),
            ]);
    }
}
