<?php

namespace App\Filament\Resources\TheoryTeachers\Pages;

use App\Filament\Resources\TheoryTeachers\TheoryTeacherResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTheoryTeachers extends ListRecords
{
    protected static string $resource = TheoryTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
