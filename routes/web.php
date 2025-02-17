<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/courses', [App\Http\Controllers\FrontController::class, 'courses'])->name('courses');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::get('/coursedetails/{id}', [App\Http\Controllers\FrontController::class, 'coursedetails'])->name('coursedetails');



Route::group(['prefix' => 'backend','as' => 'backend.'], function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('courses', App\Http\Controllers\Admin\CourseController::class);
    Route::get('/backend/courses/{course}', [CourseController::class, 'show'])->name('backend.courses.show');
    
    Route::resource('chapters', App\Http\Controllers\Admin\ChapterController::class);
    Route::get('courses/{course}/chapters/create', [ChapterController::class, 'create'])->name('courses.chapters.create');
    Route::post('courses/{course}/chapters', [ChapterController::class, 'store'])->name('courses.chapters.store');
    Route::resource('courses/chapters', App\Http\Controllers\Admin\ChapterController::class)->names(['create' => 'backend.courses.chapters.create','store' => 'backend.courses.chapters.store']);



   Route::resource('lectures', App\Http\Controllers\Admin\LectureController::class);
   Route::resource('courses.chapters.lectures', App\Http\Controllers\Admin\LectureController::class);
   Route::resource('backend/courses.lectures', App\Http\Controllers\Admin\LectureController::class)->names(['store' => 'backend.lectures.store']);
   Route::resource('courses.lectures', App\Http\Controllers\Admin\LectureController::class);

   Route::resource('users',App\Http\Controllers\Admin\UserController::class);


});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
