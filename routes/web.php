<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/course-details/{course}', [HomeController::class, 'courseDetails'])->name('course.details');
Route::get('/campaign-details/{campaign}', [HomeController::class, 'campaignDetails'])->name('campaign.details');


Route::prefix('admin')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin.index');
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

    //testimonial-ROutes

    Route::prefix('testimonial')->group(function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('/store', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('/edit/{testimonial}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::put('/update/{testimonial}', [TestimonialController::class, 'update'])->name('testimonial.update');
        Route::get('/destroy/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    });

    //website-ROutes

    Route::prefix('website')->group(function () {
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::put('/contact/update/{contact}', [ContactController::class, 'update'])->name('contact.update');
        Route::get('/content', [ContentController::class, 'index'])->name('content.index');
        Route::put('/content/update/{content}', [ContentController::class, 'update'])->name('content.update');
    });
});
