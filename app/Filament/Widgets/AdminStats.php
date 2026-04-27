<?php

namespace App\Filament\Widgets;

use App\Models\DrivingInstructor;
use App\Models\Group;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Grupas', Group::count())
                ->description('Kopējais grupu skaits')
                ->descriptionIcon('heroicon-m-check-circle')
                ->icon('heroicon-m-academic-cap')
                ->color('primary')
                ->url(fn () => route('filament.admin.resources.groups.index')),

            Stat::make('Aktīvas grupas', Group::where('status_id', 2)->count())
                ->description('Grupas, kas šobrīd aktīvas')
                ->descriptionIcon('heroicon-m-bolt')
                ->icon('heroicon-m-user-group')
                ->color('info')
                ->url(fn () => route('filament.admin.resources.groups.index')),

            Stat::make('Kursanti', Student::count())
                ->description('Kopējais kursantu skaits')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->icon('heroicon-m-user')
                ->color('success')
                ->url(fn () => route('filament.admin.resources.students.index')),

            Stat::make('Braukšanas instruktori', DrivingInstructor::count())
                ->description('Reģistrētie instruktori')
                ->descriptionIcon('heroicon-m-identification')
                ->icon('heroicon-m-identification')
                ->color('info')
                ->url(fn () => route('filament.admin.resources.driving-instructors.index')),
        ];
    }
}
