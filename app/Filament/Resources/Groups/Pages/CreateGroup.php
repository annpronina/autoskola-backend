<?php

namespace App\Filament\Resources\Groups\Pages;

use App\Filament\Resources\Groups\GroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreateGroup extends CreateRecord
{
    protected static string $resource = GroupResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Jauna grupa'),
        ];
    }

    public function getBreadcrumb(): string
    {
        return 'Jauna';
    }

    public function getTitle(): string
    {
        return 'Jauna grupa';
    }
}
