<?php

use App\Filament\Resources\DrivingInstructors\Pages\ListDrivingInstructors;
use App\Filament\Resources\Students\Pages\ListStudents;
use App\Filament\Resources\TheoryTeachers\Pages\ListTheoryTeachers;
use App\Models\DrivingInstructor;
use App\Models\Student;
use App\Models\TheoryTeacher;

use function Pest\Livewire\livewire;

it('can sort students by full_name', function () {
    Student::factory()->count(10)->create();

    $sortedStudentsAsc = Student::query()->orderBy('name')->orderBy('surname')->get();
    $sortedStudentsDesc = Student::query()->orderBy('name', 'desc')->orderBy('surname', 'desc')->get();

    livewire(ListStudents::class)
        ->sortTable('full_name')
        ->assertCanSeeTableRecords($sortedStudentsAsc, inOrder: true)
        ->sortTable('full_name', 'desc')
        ->assertCanSeeTableRecords($sortedStudentsDesc, inOrder: true);
});

it('can sort driving instructors by full_name', function () {
    DrivingInstructor::factory()->count(10)->create();

    $sortedStudentsAsc = DrivingInstructor::query()->orderBy('name')->orderBy('surname')->get();
    $sortedStudentsDesc = DrivingInstructor::query()->orderBy('name', 'desc')->orderBy('surname', 'desc')->get();

    livewire(ListDrivingInstructors::class)
        ->sortTable('full_name')
        ->assertCanSeeTableRecords($sortedStudentsAsc, inOrder: true)
        ->sortTable('full_name', 'desc')
        ->assertCanSeeTableRecords($sortedStudentsDesc, inOrder: true);
});

it('can sort theory teachers by full_name', function () {
    TheoryTeacher::factory()->count(10)->create();

    $sortedStudentsAsc = TheoryTeacher::query()->orderBy('name')->orderBy('surname')->get();
    $sortedStudentsDesc = TheoryTeacher::query()->orderBy('name', 'desc')->orderBy('surname', 'desc')->get();

    livewire(ListTheoryTeachers::class)
        ->sortTable('full_name')
        ->assertCanSeeTableRecords($sortedStudentsAsc, inOrder: true)
        ->sortTable('full_name', 'desc')
        ->assertCanSeeTableRecords($sortedStudentsDesc, inOrder: true);
});