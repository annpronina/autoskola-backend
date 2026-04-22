<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Jauna kategorija'),
        ];
    }

    public function getBreadcrumb(): string
    {
        return 'Jauna';
    }

    public function getTitle(): string
    {
        return 'Jauna kategorija';
    }
}
