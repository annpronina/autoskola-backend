<?php

namespace App\Filament\Resources\DrivingInstructors\Pages;

use App\Filament\Resources\DrivingInstructors\DrivingInstructorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDrivingInstructor extends CreateRecord
{
    protected static string $resource = DrivingInstructorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getTitle(): string {
        return 'Jauns braukšanas instruktors';
    }
}
