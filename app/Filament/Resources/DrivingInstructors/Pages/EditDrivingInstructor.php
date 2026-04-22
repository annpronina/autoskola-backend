<?php

namespace App\Filament\Resources\DrivingInstructors\Pages;

use App\Filament\Resources\DrivingInstructors\DrivingInstructorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDrivingInstructor extends EditRecord
{
    protected static string $resource = DrivingInstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Rediģēt braukšanas instruktoru';
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
