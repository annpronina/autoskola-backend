<?php

namespace App\Filament\Resources\TheoryTeachers\Pages;

use App\Filament\Resources\TheoryTeachers\TheoryTeacherResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTheoryTeacher extends CreateRecord
{
    protected static string $resource = TheoryTeacherResource::class;

    protected function getRedirectUrl(): string
    {   
        return $this->getResource()::getUrl('index');
    }
}
