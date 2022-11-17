<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LiveController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PublicController::class, 'index'])->name('index');
Route::get('/404', [PublicController::class, 'error'])->name('error-access');
Route::get('/course-details/{course}', [PublicController::class, 'courseDetails'])->name('course.details');
Route::get('/campaign-details/{campaign}', [PublicController::class, 'campaignDetails'])->name('campaign.details');
Route::get('/courses/{category}', [PublicController::class, 'categoryCourse'])->name('category.courses');


Route::prefix('dashboard')->middleware('auth', 'isUser')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('user.index');
});





Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    // Route::prefix('admin')->group(function () {
    Route::get('/', [PublicController::class, 'admin'])->name('admin.index');
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

    //live-ROutes

    Route::prefix('live')->group(function () {
        Route::get('/', [LiveController::class, 'index'])->name('live.index');
        Route::get('/create', [LiveController::class, 'create'])->name('live.create');
        Route::post('/store', [LiveController::class, 'store'])->name('live.store');
        Route::get('/edit/{live}', [LiveController::class, 'edit'])->name('live.edit');
        Route::put('/update/{live}', [LiveController::class, 'update'])->name('live.update');
        Route::get('/destroy/{live}', [LiveController::class, 'destroy'])->name('live.destroy');
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

    //testimonial-ROutes

    Route::prefix('category')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });

    //website-ROutes

    Route::prefix('website')->group(function () {
        Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
        Route::put('/contact/update/{contact}', [ContactController::class, 'update'])->name('contact.update');
        Route::get('/content', [ContentController::class, 'index'])->name('content.index');
        Route::put('/content/update/{content}', [ContentController::class, 'update'])->name('content.update');
    });
});

Auth::routes();
