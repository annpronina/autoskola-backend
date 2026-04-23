<?php

namespace App\Filament\Resources\DrivingInstructors\Pages;

use App\Filament\Resources\DrivingInstructors\DrivingInstructorResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDrivingInstructors extends ListRecords
{
    protected static string $resource = DrivingInstructorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
        ];
    }
}
