<?php

use App\Http\Controllers\CourseController;
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
    return view('front.index');
});
Route::get('/course-details', function () {
    return view('front.pages.course-details');
});
Route::prefix('admin')->group(function () {
    Route::prefix('course')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('course.index');
        Route::get('/create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/store', [CourseController::class, 'store'])->name('course.store');
        Route::post('/edit', [CourseController::class, 'edit'])->name('course.edit');
        Route::post('/update', [CourseController::class, 'update'])->name('course.update');
    });
});
