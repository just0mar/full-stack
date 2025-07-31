<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

// Route::get('/{id}', function ($id) {
//     return view('welcome' , ['id' => $id]);

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    // Route::get('/about', function () {
    //     return view('about');
    // })->name('about');
    // Route::get('/article', function () {
    //     return view('article');
    // })->name('article');
    // Route::get('/news', function () {
    //     return view('news');
    // })->name('news');
    // Route::get('/contact_us', [Contact_us::class, 'index'])->name('contact_us');


    // Route::fallback(function () {
    //     return view('error');
    // })->name('error');

    Route::get('/student',[StudentController::class ,'index' ])->name('student.index');
Route::get('/student/create', [StudentController::class , 'create'])->name('student.create')->middleware('auth');
Route::post('/student', [StudentController::class , 'store'])->name('student.store');

Route::get('student/{id}/edit' , [StudentController::class, 'edit'])->name('student.edit');
Route::put('student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::resource('classrooms', ClassroomController::class)->middleware('auth');
// Route::get('classrooms', [ClassroomController::class, 'index'])->only(['index']);