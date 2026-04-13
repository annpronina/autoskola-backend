<?php

namespace App\Filament\Resources\DrivingLessons\Pages;

use App\Filament\Resources\DrivingLessons\DrivingLessonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDrivingLesson extends EditRecord
{
    protected static string $resource = DrivingLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
