<?php

namespace App\Filament\Resources\TheoryTeachers;

use App\Filament\Resources\TheoryTeachers\Pages\CreateTheoryTeacher;
use App\Filament\Resources\TheoryTeachers\Pages\EditTheoryTeacher;
use App\Filament\Resources\TheoryTeachers\Pages\ListTheoryTeachers;
use App\Filament\Resources\TheoryTeachers\Schemas\TheoryTeacherForm;
use App\Filament\Resources\TheoryTeachers\Tables\TheoryTeachersTable;
use App\Models\TheoryTeacher;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TheoryTeacherResource extends Resource
{
    protected static ?string $model = TheoryTeacher::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;
    protected static string|BackedEnum|null $activeNavigationIcon = Heroicon::AcademicCap;

    protected static ?string $recordTitleAttribute = 'full_name';

    protected static ?string $navigationLabel = 'Teorijas pasniedzēji';

    protected static ?string $modelLabel = 'teorijas pasniedzējs';
    protected static ?string $pluralModelLabel = 'Teorijas pasniedzēji';

    protected static bool $hasTitleCaseModelLabel = false;

    protected static ?int $navigationSort = 3;

    public static function getNavigationGroup(): ?string
    {
        return 'Lietotāji';
    }

    public static function form(Schema $schema): Schema
    {
        return TheoryTeacherForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TheoryTeachersTable::configure($table);
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
            'index' => ListTheoryTeachers::route('/'),
            'create' => CreateTheoryTeacher::route('/create'),
            'edit' => EditTheoryTeacher::route('/{record}/edit'),
        ];
    }
}
