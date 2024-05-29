<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\indexController;


Route::get('/', function () {
    return view('auth.login');
});

// USER
Route::get('/index', [indexController::class, 'index'])->name('index');

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/login-process', [LoginController::class, 'loginProcess'])->name('auth.login-process');
Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// DASHBOARD
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard-create', [HomeController::class, 'create'])->name('dashboard-create');
Route::post('/dashboard-store', [HomeController::class, 'store'])->name('dashboard.store');
Route::get('/dashboard-edit/{id}', [HomeController::class, 'edit'])->name('dashboard-edit');
Route::post('/dashboard-update/{id}', [HomeController::class, 'update'])->name('dashboard.update');
Route::get('/dashboard-delete/{id}', [HomeController::class, 'delete'])->name('dashboard.delete');
Route::get('/dashboard-search', [HomeController::class, 'search'])->name('dashboard.search');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin'], function () {
// MENU
Route::get('/land-menu/', [MenuController::class, 'index'])->name('menu.land');
Route::get('/land-menu/create-menu', [MenuController::class, 'create'])->name('menu.create');
Route::post('/land-menu/store-menu', [MenuController::class, 'store'])->name('menu.store');
Route::get('/land-menu/edit-menu/{id}', [MenuController::class, 'edit'])->name('menu.edit');
Route::post('/land-menu/update-menu/{id}', [MenuController::class, 'update'])->name('menu.update');
Route::get('/land-menu/delete-menu/{id}', [MenuController::class, 'delete'])->name('menu.delete');
Route::get('/land-menu/search-menu', [MenuController::class, 'search'])->name('menu.search');

// PROMO
Route::get('/land-promo/', [PromoController::class, 'index'])->name('promo.land');
Route::get('/land-promo/create-promo', [PromoController::class, 'create'])->name('promo.create');
Route::post('/land-promo/store-promo', [PromoController::class, 'store'])->name('promo.store');
Route::get('/land-promo/edit-promo/{id}', [PromoController::class, 'edit'])->name('promo.edit');
Route::post('/land-promo/update-promo/{id}', [PromoController::class, 'update'])->name('promo.update');
Route::get('/land-promo/delete-promo/{id}', [PromoController::class, 'delete'])->name('promo.delete');
Route::get('/land-promo/search-promo', [PromoController::class, 'search'])->name('promo.search');

// VENUE
Route::get('/land-venue/', [VenueController::class, 'index'])->name('venue.land');
Route::get('/land-venue/create-venue', [VenueController::class, 'create'])->name('venue.create');
Route::post('/land-venue/store-venue', [VenueController::class, 'store'])->name('venue.store');
Route::get('/land-venue/edit-venue/{id}', [VenueController::class, 'edit'])->name('venue.edit');
Route::post('/land-venue/update-venue/{id}', [VenueController::class, 'update'])->name('venue.update');
Route::get('/land-venue/delete-venue/{id}', [VenueController::class, 'delete'])->name('venue.delete');
Route::get('/land-venue/search-venue', [VenueController::class, 'search'])->name('venue.search');
// });
