<?php

use App\Filament\Widgets\LatestGroups;
use App\Filament\Widgets\LatestStudents;
use App\Models\Group;
use App\Models\Student;
use Livewire\Livewire;

it('shows only 5 latest students', function () {
    Student::factory()->count(10)->create();

   $latest = Student::latest()->take(5)->pluck('name');

    $component = Livewire::test(LatestStudents::class);

    foreach ($latest as $name) {
        $component->assertSee($name);
    }
});

it('shows only 5 latest groups', function () {
    Group::factory()->count(10)->create();

    $latest = Group::latest()->take(5)->pluck('name');

    $component = Livewire::test(LatestGroups::class);

    foreach ($latest as $name) {
        $component->assertSee($name);
    }
});