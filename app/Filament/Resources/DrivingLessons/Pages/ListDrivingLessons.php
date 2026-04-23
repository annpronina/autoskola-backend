<?php

namespace App\Filament\Resources\DrivingLessons\Pages;

use App\Filament\Resources\DrivingLessons\DrivingLessonResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDrivingLessons extends ListRecords
{
    protected static string $resource = DrivingLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Jauna braukšanas nodarbība'),
        ];
    }
}
