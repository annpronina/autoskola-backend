<?php

use App\Filament\Resources\TheoryLessons\Pages\CreateTheoryLesson;
use App\Filament\Resources\TheoryLessons\Pages\EditTheoryLesson;
use App\Models\Group;
use App\Models\TheoryLesson;
use function Pest\Livewire\livewire;


it('cannot create theory lesson with lesson number exceeding group lesson count', function () {
    $group = Group::factory()->create(['lesson_count' => 5]);

    livewire(CreateTheoryLesson::class)
        ->fillForm([
            'group_id' => $group->id,
            'lesson_number' => 6,
            'starts_at' => now(),
            'ends_at' => now()->addHours(2),
        ])
        ->call('create')
        ->assertHasFormErrors(['lesson_number']);
});

it('can create theory lesson with lesson number within group lesson count', function () {
    $group = Group::factory()->create(['lesson_count' => 5]);

    livewire(CreateTheoryLesson::class)
        ->fillForm([
            'group_id' => $group->id,
            'lesson_number' => 5,
            'starts_at' => now(),
            'ends_at' => now()->addHours(2),
        ])
        ->call('create')
        ->assertHasNoFormErrors();
});

it('cannot create duplicate lesson number in the same group', function () {
    $group = Group::factory()->create(['lesson_count' => 10]);
    TheoryLesson::factory()->create(['group_id' => $group->id, 'lesson_number' => 1]);

    livewire(CreateTheoryLesson::class)
        ->fillForm([
            'group_id' => $group->id,
            'lesson_number' => 1,
            'starts_at' => now(),
            'ends_at' => now()->addHours(2),
        ])
        ->call('create')
        ->assertHasFormErrors(['lesson_number']);
});

it('can use same lesson number in different groups', function () {
    $group1 = Group::factory()->create(['lesson_count' => 10]);
    $group2 = Group::factory()->create(['lesson_count' => 10]);
    TheoryLesson::factory()->create(['group_id' => $group1->id, 'lesson_number' => 1]);

    livewire(CreateTheoryLesson::class)
        ->fillForm([
            'group_id' => $group2->id,
            'lesson_number' => 1,
            'starts_at' => now(),
            'ends_at' => now()->addHours(2),
        ])
        ->call('create')
        ->assertHasNoFormErrors();
});

it('can edit theory lesson without triggering lesson number validation against itself', function () {
    $group = Group::factory()->create(['lesson_count' => 5]);
    $lesson = TheoryLesson::factory()->create(['group_id' => $group->id, 'lesson_number' => 1]);

    livewire(EditTheoryLesson::class, ['record' => $lesson->id])
        ->fillForm([
            
            'lesson_number' => 1,
        ])
        ->call('save')
        ->assertHasNoFormErrors();
});