<?php

namespace App\Filament\Resources\TheoryTeachers\Pages;

use App\Filament\Resources\TheoryTeachers\TheoryTeacherResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTheoryTeacher extends EditRecord
{
    protected static string $resource = TheoryTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
