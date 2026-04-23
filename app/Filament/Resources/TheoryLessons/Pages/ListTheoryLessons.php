<?php

namespace App\Filament\Resources\TheoryLessons\Pages;

use App\Filament\Resources\TheoryLessons\TheoryLessonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTheoryLessons extends ListRecords
{
    protected static string $resource = TheoryLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Jauna teorijas nodarbība'),
        ];
    }
}
