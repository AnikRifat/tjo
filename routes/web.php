<?php

use App\Http\Controllers\CampaignController;
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

    //Course-ROutes

    Route::prefix('course')->group(function () {
        Route::get('/', [CourseController::class, 'index'])->name('course.index');
        Route::get('/create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/edit/{course}', [CourseController::class, 'edit'])->name('course.edit');
        Route::put('/update/{course}', [CourseController::class, 'update'])->name('course.update');
        Route::get('/destroy/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
    });


    //Campaign-ROutes

    Route::prefix('campaign')->group(function () {
        Route::get('/', [CampaignController::class, 'index'])->name('campaign.index');
        Route::get('/create', [CampaignController::class, 'create'])->name('campaign.create');
        Route::post('/store', [CampaignController::class, 'store'])->name('campaign.store');
        Route::get('/edit/{campaign}', [CampaignController::class, 'edit'])->name('campaign.edit');
        Route::put('/update/{campaign}', [CampaignController::class, 'update'])->name('campaign.update');
        Route::get('/destroy/{campaign}', [CampaignController::class, 'destroy'])->name('campaign.destroy');
    });
});
