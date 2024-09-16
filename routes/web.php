<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\CategoryDetailsController;
use App\Http\Controllers\Site\ServiceReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('site.home.index');
// })->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.us');
Route::get('/category-details', [CategoryDetailsController::class, 'index'])->name('category.details');

Route::post('/service-reservation', [ServiceReservationController::class, 'store']);

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/categories/{slug}', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contactUs.index');
Route::get('/category-details/{slug}', [CategoryDetailsController::class, 'index'])->name('categoryDetails.index');
Route::post('program/book',[CategoryDetailsController::class,'store'])->name('categoryDetails.book');
Route::post('contactus',[ContactController::class,'store'])->name('contactus.store');