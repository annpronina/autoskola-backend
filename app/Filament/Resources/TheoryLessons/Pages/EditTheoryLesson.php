<?php

namespace App\Filament\Resources\TheoryLessons\Pages;

use App\Filament\Resources\TheoryLessons\TheoryLessonResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTheoryLesson extends EditRecord
{
    protected static string $resource = TheoryLessonResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getTitle(): string
    {
        return 'Rediģēt braukšanas nodarbību';
    }
}
