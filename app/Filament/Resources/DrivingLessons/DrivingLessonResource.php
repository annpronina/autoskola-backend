<?php

namespace App\Filament\Resources\DrivingLessons;

use App\Filament\Resources\DrivingLessons\Pages\CreateDrivingLesson;
use App\Filament\Resources\DrivingLessons\Pages\EditDrivingLesson;
use App\Filament\Resources\DrivingLessons\Pages\ListDrivingLessons;
use App\Filament\Resources\DrivingLessons\Schemas\DrivingLessonForm;
use App\Filament\Resources\DrivingLessons\Tables\DrivingLessonsTable;
use App\Models\DrivingLesson;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DrivingLessonResource extends Resource
{
    protected static ?string $model = DrivingLesson::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::CalendarDays;

    protected static ?string $navigationLabel = 'Braukšanas nodarbības';

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return 'Kursi un Grupas';
    }

    public static function form(Schema $schema): Schema
    {
        return DrivingLessonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DrivingLessonsTable::configure($table);
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
            'index' => ListDrivingLessons::route('/'),
            'create' => CreateDrivingLesson::route('/create'),
            'edit' => EditDrivingLesson::route('/{record}/edit'),
        ];
    }
}
