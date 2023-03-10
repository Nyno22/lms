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


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::resource('contact', App\Http\Controllers\ContactController::class);
Route::resource('purchase', App\Http\Controllers\PurchaseController::class);

Route::get('/', function () {
    return view('home');
})->name('homee');

Route::get('/dashboard', function () {
    return redirect('home');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/courses/{id}', [App\Http\Controllers\CourseController::class, 'index'])->name('courses');
Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers');
Route::get('/teachers/{id}', [App\Http\Controllers\TeacherController::class, 'viewteacher'])->name('deteacher');
Route::get('/teachers/{id}/courses', [App\Http\Controllers\TeacherController::class, 'viewcourses'])->name('teachercourse');
Route::get('/course/{id}', [App\Http\Controllers\CourseController::class, 'viewcourse'])->middleware('auth')->name('steachercourse');



Route::prefix('admin')->middleware('auth')->group(function () {
    
    Route::resource('courses', App\Http\Controllers\Teacher\CourseController::class);
    Route::resource('profile', App\Http\Controllers\Teacher\ProfileController::class);

    Route::get('/home', [App\Http\Controllers\Teacher\HomeController::class, 'index'])->name('thome');
    Route::get('/students', [App\Http\Controllers\Teacher\StudentController::class, 'index'])->name('tstudents');
    Route::get('/profile', [App\Http\Controllers\Teacher\ProfileController::class, 'index'])->name('tprofile');
    Route::get('/courses', [App\Http\Controllers\Teacher\CourseController::class, 'index'])->name('tcourses');
});

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
