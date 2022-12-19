<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('profilee', App\Http\Controllers\Teacher\ProfileController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');

Route::get('/teacher', function () {
    return view('teachers.index');
})->middleware('is_admin')->name('teacher.index');

Route::get('/profilee', [App\Http\Controllers\Teacher\ProfileController::class, 'index'])->name('profilee');

Route::get('/courses', [App\Http\Controllers\Teacher\CourseController::class, 'index'])->name('courses');


Route::get('/students', function () {
    return view('students.students');
})->middleware('is_admin')->name('student');

Route::resource('roles', RolesController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
