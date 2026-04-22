<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class LatestStudents extends TableWidget
{
    protected static ?string $heading = 'Jaunākie kursanti';

    protected int | string | array $columnSpan = 1;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Student::query()->latest()->limit(5)
            )
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->label('Vārds')
                    ->alignCenter(),

                TextColumn::make('surname')
                    ->label('Uzvārds')
                    ->alignCenter(),
                
                TextColumn::make('created_at')
                    ->label('Pievienošanas datums')
                    ->date('d.m.Y')
                    ->alignCenter()
            ]);
    }
}
