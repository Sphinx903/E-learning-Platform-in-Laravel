<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Courses
Route::resource('courses', CourseController::class);

// Lessons
Route::get('courses/{course}/lessons/create', [LessonController::class, 'create'])->name('lessons.create');
Route::post('courses/{course}/lessons', [LessonController::class, 'store'])->name('lessons.store');
Route::get('courses/{course}/lessons/{lesson}/edit', [LessonController::class, 'edit'])->name('lessons.edit');
Route::put('courses/{course}/lessons/{lesson}', [LessonController::class, 'update'])->name('lessons.update');

// Enrollments
Route::post('enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');

// Authentication routes (if using Laravel Breeze or similar)
require __DIR__.'/auth.php';

