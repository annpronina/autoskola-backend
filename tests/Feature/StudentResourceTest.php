<?php

use App\Filament\Resources\Students\Pages\ListStudents;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Models\Student;
use App\Models\User;

use function Pest\Livewire\livewire;


it('can search students by name', function () {
    $target = Student::factory()->create(['name' => 'Uniquevards']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('Uniquevards')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});

it('can search students by surname', function () {
    $target = Student::factory()->create(['surname' => 'Uniqueuzvards']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('Uniqueuzvards')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});

it('can search students by personal code', function () {
    $target = Student::factory()->create(['personal_code' => '999999-99999']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('999999-99999')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});

it('can search students by phone', function () {
    $target = Student::factory()->create(['phone' => '+37100000001']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('+37100000001')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});

it('can search students by email', function () {
    $target = Student::factory()->create(['email' => 'unique@testmail.com']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('unique@testmail.com')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});

it('can search students by address', function () {
    $target = Student::factory()->create(['address' => 'Unikala iela 999']);
    $others = Student::factory(4)->create();

    livewire(ListStudents::class)
        ->searchTable('Unikala iela 999')
        ->assertCanSeeTableRecords(collect([$target]))
        ->assertCanNotSeeTableRecords($others);
});