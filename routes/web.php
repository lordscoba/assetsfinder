<?php

use App\Http\Controllers\LandingPagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\Properties\PropertiesController;
use App\Http\Controllers\Admin\Agencies\AgenciesController;
use App\Http\Controllers\Admin\PicturesController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\ContactFeedController;
use App\Http\Controllers\SuscribersFeedController;
use App\Http\Controllers\Dashboard\Properties\UserPropertiesController;
use App\Http\Controllers\Dashboard\Profile\ProfileController;
use App\Http\Controllers\Dashboard\Profile\UploadImage;
use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\SuscribersController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Dashboard\UserPicturesController;
use App\Http\Controllers\ReviewFeedController;
// use App\Http\Livewire\SelectHouse;



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

Route::get('suscribers', [SuscribersFeedController::class, 'create']);
Route::post('suscribers', [SuscribersFeedController::class, 'store']);
Route::get('contact-us', [ContactFeedController::class, 'create']);
Route::post('contact-us', [ContactFeedController::class, 'store']);
Route::get('reviewfeed', [ReviewFeedController::class, 'create']);
Route::post('reviewfeed', [ReviewFeedController::class, 'store']);
Route::get('description/{id}', [LandingPagesController::class, 'description'])->name('description');
Route::get('/',[LandingPagesController::class,'index'])->name('landing');
Route::get('/about-us',[LandingPagesController::class,'about_us'])->name('about-us');
Route::get('/contact',[LandingPagesController::class,'contact'])->name('contact-us');
Route::get('/faq',[LandingPagesController::class,'faq'])->name('faq');
Route::get('/privacy-policy',[LandingPagesController::class,'privacy_policy'])->name('privacy-policy');
Route::get('/services',[LandingPagesController::class,'services'])->name('services');
Route::get('/terms-conditions',[LandingPagesController::class,'terms_conditions'])->name('terms-conditions');
Route::get('/error',[LandingPagesController::class,'error'])->name('error');
Route::get('/agents/agency-list',[LandingPagesController::class,'agency_list'])->name('agency-list');
Route::get('/agents/agency-profile/{id}',[LandingPagesController::class,'agency_profile'])->name('agency-profile');
Route::get('/agents/agent-list',[LandingPagesController::class,'agent_list'])->name('agent-list');
Route::get('/agents/agent-profile/{id}',[LandingPagesController::class,'agent_profile'])->name('agent-profile');



//Authentication routes starts
Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List                
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [IndexController::class, 'index'])->name('home');
    Route::get('dashboard/profile', [ProfileController::class, 'index'])->name('user_profile');
    Route::get('profile', [ProfileController::class, 'index'])->name('user_profile');
    Route::get('profile/{id}/edit', [ProfileController::class, 'edit']);
    Route::put('profile/{id}', [ProfileController::class, 'update']);
    Route::post('profile/{id}/password', [ProfileController::class, 'changePasswordEdit']);
    Route::post('profile/{id}', [ProfileController::class, 'changePassword']);
    Route::post('profile/{id}/email', [ProfileController::class, 'changeEmailEdit']);
    Route::post('profile/{id}', [ProfileController::class, 'changeEmail']);
    Route::post('dashboard/profile/changePicture', [ProfileController::class, 'changePicture']);
    Route::resource('dashboard/user-properties', UserPropertiesController::class);
    Route::resource('dashboard/tin-pictures', UserPicturesController::class)->except(['create']);
    Route::resource('user_image', UploadImage::class)->only(['edit','update']);
});

/*-----------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('admin', [HomeController::class, 'AdminHome'])->name('super.admin.home');
    Route::resource('admin/users', UsersController::class);
    Route::resource('admin/properties', PropertiesController::class);
    Route::resource('admin/agencies', AgenciesController::class);
    Route::resource('admin/pictures', PicturesController::class)->except(['create']);
    Route::resource('admin/reviews', ReviewController::class)->except(['create','show']);
    Route::resource('admin/faqs', FaqController::class)->except([ 'show']);
    Route::resource('admin/suscribers', SuscribersController::class)->except([
        'edit', 'show',
    ]);
    Route::resource('admin/contact_us', ContactUsController::class)->except([
        'edit', 'show',
    ]);
});

/*-------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager', [HomeController::class, 'managerHome'])->name('manager.home');
});

