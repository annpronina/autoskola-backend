<?php

use App\Filament\Resources\DrivingLessons\Pages\CreateDrivingLesson;
use App\Filament\Resources\DrivingLessons\Pages\EditDrivingLesson;
use App\Models\Category;
use App\Models\DrivingInstructor;
use App\Models\DrivingLesson;
use App\Models\DrivingLessonStatus;
use App\Models\Student;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Livewire\livewire;

it('can create a driving lesson', function () {
    $instructor = DrivingInstructor::factory()->create();
    $student = Student::factory()->create();
    $category = Category::factory()->create();
    $status = DrivingLessonStatus::factory()->create();

    livewire(CreateDrivingLesson::class)
        ->fillForm([
            'category_id' => $category->id,
            'driving_instructor_id' => $instructor->id,
            'student_id' => $student->id,
            'status_id' => $status->id,
            'starts_at' => now(),
            'ends_at' => now()->addHour(),
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    assertDatabaseHas('driving_lessons', [
        'student_id' => $student->id,
        'driving_instructor_id' => $instructor->id,
        'category_id' => $category->id,
        'status_id' => $status->id,
    ]);
});

it('can edit a driving lesson', function () {
    $lesson = DrivingLesson::factory()->create(); // ✅ tagad strādās
    $newInstructor = DrivingInstructor::factory()->create();
    $newStatus = DrivingLessonStatus::factory()->create();

    livewire(EditDrivingLesson::class, ['record' => $lesson->getRouteKey()])
        ->fillForm([
            'driving_instructor_id' => $newInstructor->id,
            'status_id' => $newStatus->id,
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    assertDatabaseHas('driving_lessons', [
        'id' => $lesson->id,
        'driving_instructor_id' => $newInstructor->id,
        'status_id' => $newStatus->id,
    ]);
});

it('requires category', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['category_id' => null])
        ->call('create')
        ->assertHasFormErrors(['category_id' => 'required']);
});

it('requires driving instructor', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['driving_instructor_id' => null])
        ->call('create')
        ->assertHasFormErrors(['driving_instructor_id' => 'required']);
});

it('requires student', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['student_id' => null])
        ->call('create')
        ->assertHasFormErrors(['student_id' => 'required']);
});

it('requires status', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['status_id' => null])
        ->call('create')
        ->assertHasFormErrors(['status_id' => 'required']);
});

it('requires starts_at', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['starts_at' => null])
        ->call('create')
        ->assertHasFormErrors(['starts_at' => 'required']);
});

it('requires ends_at', function () {
    livewire(CreateDrivingLesson::class)
        ->fillForm(['ends_at' => null])
        ->call('create')
        ->assertHasFormErrors(['ends_at' => 'required']);
});

it('requires ends_at to be after starts_at', function () {
    $start = now()->addHour();
    $end = now();

    livewire(CreateDrivingLesson::class)
        ->fillForm([
            'starts_at' => $start,
            'ends_at' => $end,
        ])
        ->call('create')
        ->assertHasFormErrors(['ends_at' => 'after']);
});
