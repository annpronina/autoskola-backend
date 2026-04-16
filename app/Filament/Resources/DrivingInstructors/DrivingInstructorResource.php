<?php

namespace App\Filament\Resources\DrivingInstructors;

use App\Filament\Resources\DrivingInstructors\Pages\CreateDrivingInstructor;
use App\Filament\Resources\DrivingInstructors\Pages\EditDrivingInstructor;
use App\Filament\Resources\DrivingInstructors\Pages\ListDrivingInstructors;
use App\Filament\Resources\DrivingInstructors\Schemas\DrivingInstructorForm;
use App\Filament\Resources\DrivingInstructors\Tables\DrivingInstructorsTable;
use App\Models\DrivingInstructor;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DrivingInstructorResource extends Resource
{
    protected static ?string $model = DrivingInstructor::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedIdentification;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::Identification;

    protected static ?string $recordTitleAttribute = 'full_name';

    protected static ?string $navigationLabel = 'Braukšanas instruktori';
    protected static ?string $modelLabel = 'braukšanas instruktors';
    protected static ?string $pluralModelLabel = 'braukšanas instruktori';

    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): ?string
    {
        return 'Lietotāji';
    }

    public static function form(Schema $schema): Schema
    {
        return DrivingInstructorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DrivingInstructorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDrivingInstructors::route('/'),
            'create' => CreateDrivingInstructor::route('/create'),
            'edit' => EditDrivingInstructor::route('/{record}/edit'),
        ];
    }
}
