<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminFeaturesController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\CateringController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\DjController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingsController;









// login and sign up Routes
Route::get('/login-register', [AuthController::class, 'showLoginForm'])->name('login_register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Website Routes
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/packages', function () {
    return view('packages');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/get', function () {
    return view('get-a-quote');
});
Route::get('/inner', function () {
    return view('sample-inner-page');
});
Route::get('/venues', function () {
    return view('venues');
});
Route::get('/caterings', function () {
    return view('caterings');
});
Route::get('/themes', function () {
    return view('themes');
});
Route::get('/cake', function () {
    return view('cake');
});
Route::get('/dj', function () {
    return view('dj');
});
Route::get('/form', function () {
    return view('form');
});
// Admin Dshboard Routes


// show features


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/features', [AdminFeaturesController::class, 'index'])->name('features');
    Route::post('/features', [AdminFeaturesController::class, 'store'])->name('features.store');
    // Add other routes for show, edit, update, and destroy if needed
});


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/venues/create', [VenueController::class, 'create'])->name('venues.create');
    Route::post('/venues', [VenueController::class, 'store'])->name('venues.store');

    // Add similar routes for other tables (caterings, themes, cakes, djs) if needed
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/catering/create', [CateringController::class, 'create'])->name('catering.create');
    Route::post('/catering', [CateringController::class, 'store'])->name('catering.store');

    // Add similar routes for other tables (caterings, themes, cakes, djs) if needed
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/theme/create', [ThemeController::class, 'create'])->name('theme.create');
    Route::post('/theme', [ThemeController::class, 'store'])->name('theme.store');

    // Add similar routes for other tables (caterings, themes, cakes, djs) if needed
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/cake/create', [CakeController::class, 'create'])->name('cake.create');
    Route::post('/cake', [CakeController::class, 'store'])->name('cake.store');

    // Add similar routes for other tables (caterings, themes, cakes, djs) if needed
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Other admin routes...

    Route::get('/dj/create', [DjController::class, 'create'])->name('dj.create');
    Route::post('/dj', [DjController::class, 'store'])->name('dj.store');

    // Add similar routes for other tables (caterings, themes, cakes, djs) if needed
});


// users


Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/venues', [VenueController::class, 'index'])->name('venues');
Route::get('/themes', [ThemeController::class, 'index'])->name('themes');
Route::get('/cake', [CakeController::class, 'index'])->name('cake');
Route::get('/caterings', [CateringController::class, 'index'])->name('caterings');
Route::get('/dj', [DjController::class, 'index'])->name('dj');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::resource('booking', BookingController::class);
Route::resource('admin', BookingsController::class);

