<?php

namespace App\Filament\Resources\TheoryLessons;

use App\Filament\Resources\TheoryLessons\Pages\CreateTheoryLesson;
use App\Filament\Resources\TheoryLessons\Pages\EditTheoryLesson;
use App\Filament\Resources\TheoryLessons\Pages\ListTheoryLessons;
use App\Filament\Resources\TheoryLessons\Schemas\TheoryLessonForm;
use App\Filament\Resources\TheoryLessons\Tables\TheoryLessonsTable;
use App\Models\TheoryLesson;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TheoryLessonResource extends Resource
{
    protected static ?string $model = TheoryLesson::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::BookOpen;

    protected static ?string $navigationLabel = 'Teorijas nodarbības';
    protected static ?string $modelLabel = 'teorijas nodarbība';
    protected static ?string $pluralModelLabel = 'Teorijas nodarbības';

    protected static bool $hasTitleCaseModelLabel = false;

    protected static ?int $navigationSort = 4;

    public static function getNavigationGroup(): ?string
    {
        return 'Kursi un Grupas';
    }

    public static function form(Schema $schema): Schema
    {
        return TheoryLessonForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TheoryLessonsTable::configure($table);
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
            'index' => ListTheoryLessons::route('/'),
            'create' => CreateTheoryLesson::route('/create'),
            'edit' => EditTheoryLesson::route('/{record}/edit'),
        ];
    }
}
