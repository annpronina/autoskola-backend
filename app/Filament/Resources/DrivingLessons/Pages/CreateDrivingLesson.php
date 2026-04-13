<?php

namespace App\Filament\Resources\DrivingLessons\Pages;

use App\Filament\Resources\DrivingLessons\DrivingLessonResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDrivingLesson extends CreateRecord
{
    protected static string $resource = DrivingLessonResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
