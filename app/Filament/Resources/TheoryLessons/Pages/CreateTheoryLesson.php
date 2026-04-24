<?php

namespace App\Filament\Resources\TheoryLessons\Pages;

use App\Filament\Resources\TheoryLessons\TheoryLessonResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTheoryLesson extends CreateRecord
{
    protected static string $resource = TheoryLessonResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getBreadcrumb(): string
    {
        return 'Jauna';
    }

    public function getTitle(): string
    {
        return 'Jauna teorijas nodarbība';
    }
}


